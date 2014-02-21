<?php

namespace Oro\Bundle\IntegrationBundle\Tests\Unit\Provider;

use Oro\Bundle\IntegrationBundle\Entity\Channel;

class SyncProcessorTest extends \PHPUnit_Framework_TestCase
{
    /** @var Channel|\PHPUnit_Framework_MockObject_MockObject */
    protected $channel;

    /** @var \PHPUnit_Framework_MockObject_MockObject */
    protected $em;

    /** @var \PHPUnit_Framework_MockObject_MockObject */
    protected $processorRegistry;

    /** @var \PHPUnit_Framework_MockObject_MockObject */
    protected $jobExecutor;

    /** @var \PHPUnit_Framework_MockObject_MockObject */
    protected $registry;

    /** @var \PHPUnit_Framework_MockObject_MockObject */
    protected $log;

    /**
     * Setup test obj and mock
     */
    public function setUp()
    {
        $this->em = $this->getMockBuilder('Doctrine\ORM\EntityManager')
            ->disableOriginalConstructor()
            ->setMethods(array('createQueryBuilder'))
            ->getMock();

        $this->processorRegistry = $this->getMock('Oro\Bundle\ImportExportBundle\Processor\ProcessorRegistry');

        $this->jobExecutor = $this->getMockBuilder('Oro\Bundle\IntegrationBundle\ImportExport\Job\Executor')
            ->disableOriginalConstructor()
            ->getMock();

        $this->registry = $this->getMock('Oro\Bundle\IntegrationBundle\Manager\TypesRegistry');
        $this->channel = $this->getMock('Oro\Bundle\IntegrationBundle\Entity\Channel');
        $this->log = $this->getMock('Oro\Bundle\IntegrationBundle\Logger\LoggerStrategy');
    }

    /**
     * Tear down
     */
    public function tearDown()
    {
        unset($this->em, $this->processorRegistry, $this->registry, $this->jobExecutor, $this->processor, $this->log);
    }

    /**
     * Return mocked sync processor
     *
     * @param array $mockedMethods
     * @return \PHPUnit_Framework_MockObject_MockObject
     */
    protected function getSyncProcessor($mockedMethods = [])
    {
        return $this->getMock(
            'Oro\Bundle\IntegrationBundle\Provider\SyncProcessor',
            $mockedMethods,
            [
                $this->em,
                $this->processorRegistry,
                $this->jobExecutor,
                $this->registry,
                $this->log
            ]
        );
    }

    /**
     * Test process method
     */
    public function testProcess()
    {
        $connectors = [];

        $this->channel->expects($this->once())
            ->method('getConnectors')
            ->will($this->returnValue($connectors));

        $processor = $this->getSyncProcessor(['processImport']);

        $this->assertInstanceOf('Oro\Bundle\IntegrationBundle\Provider\SyncProcessorInterface', $processor);
        $processor->process($this->channel, true);
    }
}
