<?php

namespace Oro\Bundle\IntegrationBundle\Provider;

use Symfony\Component\HttpFoundation\ParameterBag;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * @package Oro\Bundle\IntegrationBundle
 */
abstract class SOAPTransport implements TransportInterface
{
    /** @var \SoapClient */
    protected $client;

    /**
     * {@inheritdoc}
     */
    public function init(ParameterBag $settings)
    {
        $wsdlUrl = $settings->get('wsdl_url');
        if ($wsdlUrl) {
            $isDebug      = $settings->get('debug', false);
            $this->client = $this->getSoapClient($wsdlUrl, $isDebug);

            return true;
        }

        throw new InvalidConfigurationException("SOAP Transport require 'wsdl_url' option to be defined.");
    }

    /**
     * {@inheritdoc}
     */
    public function call($action, array $params = [])
    {
        if (!$this->client) {
            throw new InvalidConfigurationException("SOAP Transport does not configured properly.");
        }
        $result = $this->client->__soapCall($action, $params);

        return $result;
    }

    /**
     * @param string $wsdl_url
     * @param bool   $isDebug
     *
     * @return \SoapClient
     */
    protected function getSoapClient($wsdl_url, $isDebug = false)
    {
        $options = [];
        if ($isDebug) {
            $options['trace'] = true;
        }

        return new \SoapClient($wsdl_url, $options);
    }

    /**
     * @return string last SOAP response
     */
    public function getLastResponse()
    {
        return $this->client->__getLastResponse();
    }

    /**
     * @return string last SOAP request
     */
    public function getLastRequest()
    {
        return $this->client->__getLastRequest();
    }

    /**
     * Clone
     */
    public function __clone()
    {
        $this->client = null;
    }

    /**
     * Does not allow to serialize
     * It may cause serialization error on SoapClient
     *
     * @return array
     */
    public function __sleep()
    {
        return [];
    }
}
