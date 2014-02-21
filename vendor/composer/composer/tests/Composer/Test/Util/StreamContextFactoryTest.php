<?php

/*
 * This file is part of Composer.
 *
 * (c) Nils Adermann <naderman@naderman.de>
 *     Jordi Boggiano <j.boggiano@seld.be>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Composer\Test\Util;

use Composer\Util\StreamContextFactory;

class StreamContextFactoryTest extends \PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
        unset($_SERVER['HTTP_PROXY']);
        unset($_SERVER['http_proxy']);
        unset($_SERVER['no_proxy']);
    }

    protected function tearDown()
    {
        unset($_SERVER['HTTP_PROXY']);
        unset($_SERVER['http_proxy']);
        unset($_SERVER['no_proxy']);
    }

    /**
     * @dataProvider dataGetContext
     */
    public function testGetContext($expectedOptions, $defaultOptions, $expectedParams, $defaultParams)
    {
        $context = StreamContextFactory::getContext('http://example.org', $defaultOptions, $defaultParams);
        $options = stream_context_get_options($context);
        $params = stream_context_get_params($context);

        $this->assertEquals($expectedOptions, $options);
        $this->assertEquals($expectedParams, $params);
    }

    public function dataGetContext()
    {
        return array(
            array(
                $a = array('http' => array('follow_location' => 1, 'max_redirects' => 20)), array(),
                array('options' => $a), array()
            ),
            array(
                $a = array('http' => array('method' => 'GET', 'max_redirects' => 20, 'follow_location' => 1)), array('http' => array('method' => 'GET')),
                array('options' => $a, 'notification' => $f = function() {}), array('notification' => $f)
            ),
        );
    }

    public function testHttpProxy()
    {
        $_SERVER['http_proxy'] = 'http://username:p%40ssword@proxyserver.net:3128/';
        $_SERVER['HTTP_PROXY'] = 'http://proxyserver/';

        $context = StreamContextFactory::getContext('http://example.org', array('http' => array('method' => 'GET')));
        $options = stream_context_get_options($context);

        $this->assertEquals(array('http' => array(
            'proxy' => 'tcp://proxyserver.net:3128',
            'request_fulluri' => true,
            'method' => 'GET',
            'header' => array("Proxy-Authorization: Basic " . base64_encode('username:p@ssword')),
            'max_redirects' => 20,
            'follow_location' => 1,
        )), $options);
    }

    public function testHttpProxyWithNoProxy()
    {
        $_SERVER['http_proxy'] = 'http://username:password@proxyserver.net:3128/';
        $_SERVER['no_proxy'] = 'foo,example.org';

        $context = StreamContextFactory::getContext('http://example.org', array('http' => array('method' => 'GET')));
        $options = stream_context_get_options($context);

        $this->assertEquals(array('http' => array(
            'method' => 'GET',
            'max_redirects' => 20,
            'follow_location' => 1,
        )), $options);
    }

    public function testHttpProxyWithNoProxyWildcard()
    {
        $_SERVER['http_proxy'] = 'http://username:password@proxyserver.net:3128/';
        $_SERVER['no_proxy'] = '*';

        $context = StreamContextFactory::getContext('http://example.org', array('http' => array('method' => 'GET')));
        $options = stream_context_get_options($context);

        $this->assertEquals(array('http' => array(
            'method' => 'GET',
            'max_redirects' => 20,
            'follow_location' => 1,
        )), $options);
    }

    public function testOptionsArePreserved()
    {
        $_SERVER['http_proxy'] = 'http://username:password@proxyserver.net:3128/';

        $context = StreamContextFactory::getContext('http://example.org', array('http' => array('method' => 'GET', 'header' => array("X-Foo: bar"), 'request_fulluri' => false)));
        $options = stream_context_get_options($context);

        $this->assertEquals(array('http' => array(
            'proxy' => 'tcp://proxyserver.net:3128',
            'request_fulluri' => false,
            'method' => 'GET',
            'header' => array("X-Foo: bar", "Proxy-Authorization: Basic " . base64_encode('username:password')),
            'max_redirects' => 20,
            'follow_location' => 1,
        )), $options);
    }

    public function testHttpProxyWithoutPort()
    {
        $_SERVER['http_proxy'] = 'http://username:password@proxyserver.net';

        $context = StreamContextFactory::getContext('http://example.org', array('http' => array('method' => 'GET')));
        $options = stream_context_get_options($context);

        $this->assertEquals(array('http' => array(
            'proxy' => 'tcp://proxyserver.net:80',
            'request_fulluri' => true,
            'method' => 'GET',
            'header' => array("Proxy-Authorization: Basic " . base64_encode('username:password')),
            'max_redirects' => 20,
            'follow_location' => 1,
        )), $options);
    }

    /**
     * @dataProvider dataSSLProxy
     */
    public function testSSLProxy($expected, $proxy)
    {
        $_SERVER['http_proxy'] = $proxy;

        if (extension_loaded('openssl')) {
            $context = StreamContextFactory::getContext('http://example.org');
            $options = stream_context_get_options($context);

            $this->assertEquals(array('http' => array(
                'proxy' => $expected,
                'request_fulluri' => true,
                'max_redirects' => 20,
                'follow_location' => 1,
            )), $options);
        } else {
            try {
                StreamContextFactory::getContext('http://example.org');
                $this->fail();
            } catch (\RuntimeException $e) {
                $this->assertInstanceOf('RuntimeException', $e);
            }
        }
    }

    public function dataSSLProxy()
    {
        return array(
            array('ssl://proxyserver:443', 'https://proxyserver/'),
            array('ssl://proxyserver:8443', 'https://proxyserver:8443'),
        );
    }

    public function testEnsureThatfixHttpHeaderFieldMovesContentTypeToEndOfOptions()
    {
        $options = array(
            'http' => array(
                'header' => "X-Foo: bar\r\nContent-Type: application/json\r\nAuthorization: Basic aW52YWxpZA=="
            )
        );
        $expectedOptions = array(
            'http' => array(
                'header' => array(
                    "X-Foo: bar",
                    "Authorization: Basic aW52YWxpZA==",
                    "Content-Type: application/json"
                )
            )
        );
        $context = StreamContextFactory::getContext('http://example.org', $options);
        $ctxoptions = stream_context_get_options($context);
        $this->assertEquals(end($ctxoptions['http']['header']), end($expectedOptions['http']['header']));
    }
}
