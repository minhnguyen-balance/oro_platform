<?php

namespace Oro\Bundle\NavigationBundle\Tests\Unit\Content;

use Doctrine\ORM\UnitOfWork;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Mapping\ClassMetadata;

use Oro\Bundle\EntityBundle\ORM\EntityClassResolver;
use Oro\Bundle\NavigationBundle\Content\DoctrineTagGenerator;
use Oro\Bundle\NavigationBundle\Tests\Unit\Content\Stub\EntityStub;
use Oro\Bundle\NavigationBundle\Tests\Unit\Content\Stub\NewEntityStub;
use Oro\Bundle\NavigationBundle\Tests\Unit\Content\Stub\PersistentCollectionStub;

class DoctrineTagGeneratorTest extends \PHPUnit_Framework_TestCase
{
    const TEST_ENTITY_NAME       = 'Oro\\Bundle\\NavigationBundle\\Tests\\Unit\\Content\\Stub\\EntityStub';
    const TEST_ASSOCIATION_FIELD = 'testField';

    /** @var  DoctrineTagGenerator */
    protected $generator;

    /** @var \PHPUnit_Framework_MockObject_MockObject|EntityManager */
    protected $em;

    /** @var \PHPUnit_Framework_MockObject_MockObject|UnitOfWork */
    protected $uow;

    /** @var \PHPUnit_Framework_MockObject_MockObject|EntityClassResolver */
    protected $resolver;

    public function setUp()
    {
        $this->em       = $this->getMockBuilder('Doctrine\ORM\EntityManager')
            ->disableOriginalConstructor()->getMock();
        $this->uow      = $this->getMockBuilder('Doctrine\ORM\UnitOfWork')
            ->disableOriginalConstructor()->getMock();
        $this->resolver = $this->getMockBuilder('Oro\Bundle\EntityBundle\ORM\EntityClassResolver')
            ->disableOriginalConstructor()->getMock();

        $this->em->expects($this->any())->method('getUnitOfWork')
            ->will($this->returnValue($this->uow));
        $entityClass = self::TEST_ENTITY_NAME;
        $this->resolver->expects($this->any())->method('isEntity')
            ->will(
                $this->returnCallback(
                    function ($class) use ($entityClass) {
                        return $class === $entityClass;
                    }
                )
            );

        $this->generator = new DoctrineTagGenerator($this->em, $this->resolver);
    }

    public function tearDown()
    {
        unset($this->em, $this->resolver, $this->generator);
    }

    /**
     * @dataProvider supportsDataProvider
     *
     * @param mixed $data
     * @param bool  $expectedResult
     */
    public function testSupports($data, $expectedResult)
    {
        $this->assertSame($expectedResult, $this->generator->supports($data));
    }

    /**
     * @return array
     */
    public function supportsDataProvider()
    {
        return [
            'real entity object given'           => [new EntityStub(), true],
            'real entity class name given'       => [self::TEST_ENTITY_NAME, true],
            'form instance with real data given' => [$this->getFormMock(new EntityStub()), true],
            'array given'                        => [['someKey' => 'test'], false],
            'some string given'                  => ['testString', false],
            'form with array given'              => [$this->getFormMock(['someKey' => 'test']), false],
        ];
    }

    /**
     * @dataProvider generateDataProvider
     *
     * @param mixed $data
     * @param bool  $includeCollectionTag
     * @param int   $expectedCount
     * @param bool  $isManaged
     */
    public function testGenerate($data, $includeCollectionTag, $expectedCount, $isManaged = false)
    {
        // only once if it's object
        $this->uow->expects($this->exactly(is_object($data) ? 1 : 0))->method('getEntityState')
            ->will(
                $this->returnCallback(
                    function ($object) use ($isManaged) {
                        return $isManaged ? UnitOfWork::STATE_MANAGED : UnitOfWork::STATE_NEW;
                    }
                )
            );
        $this->uow->expects($this->exactly((int)$isManaged))->method('getEntityIdentifier')
            ->will($this->returnValue(['someIdentifierValue']));

        $result = $this->generator->generate($data, $includeCollectionTag);
        $this->assertCount($expectedCount, $result);

        $this->assertCount(
            $expectedCount,
            $this->generator->generate($data, $includeCollectionTag),
            'Should not provoke expectation error, cause tags info should be cached'
        );
    }

    /**
     * @return array
     */
    public function generateDataProvider()
    {
        return [
            'Should not generate any tags for new entity'                           => [new NewEntityStub(), false, 0],
            'Should not generate only collection tag for new entity'                => [new NewEntityStub(), true, 1],
            'Should generate one tag for managed entity'                            => [
                new EntityStub(),
                false,
                1,
                true
            ],
            'Should generate two tag for managed entity when collection asked'      => [
                new EntityStub(),
                true,
                2,
                true
            ],
            'Should not generate tag when data taken from string'                   => [
                self::TEST_ENTITY_NAME,
                false,
                0
            ],
            'Should generate collection tag when data taken from string'            => [
                self::TEST_ENTITY_NAME,
                true,
                1
            ],
            'Should take data from form and return tags for managed entity'         => [
                $this->getFormMock(
                    new EntityStub()
                ),
                true,
                2,
                true
            ],
            'Should take data from form and generate collection tag for new entity' => [
                $this->getFormMock(
                    new NewEntityStub()
                ),
                true,
                1,
                false
            ],
        ];
    }

    /**
     * @dataProvider collectNestingDataDataProvider
     *
     * @param array $associations
     * @param array $mappings
     * @param int   $expectedCount
     */
    public function testCollectNestingData($associations, $mappings, $expectedCount)
    {
        $testData   = new EntityStub();
        $reflection = new \ReflectionMethod($this->generator, 'collectNestedDataTags');
        $reflection->setAccessible(true);
        $this->uow->expects($this->any())->method('getEntityIdentifier')
            ->will($this->returnValue(['someIdentifierValue']));

        $metadata = new ClassMetadata(self::TEST_ENTITY_NAME);
        $this->em->expects($this->once())->method('getClassMetadata')->with(self::TEST_ENTITY_NAME)
            ->will($this->returnValue($metadata));

        $metadata->associationMappings = $mappings;

        foreach ($associations as $name => $dataValue) {
            $field = $this->getMockBuilder('\ReflectionProperty')
                ->disableOriginalConstructor()->getMock();
            $field->expects($this->once())->method('getValue')->with($testData)
                ->will($this->returnValue($dataValue));
            $metadata->reflFields[$name] = $field;
        }

        $result = $reflection->invoke($this->generator, $testData);

        $this->assertInternalType('array', $result, 'Should always return array');
        $this->assertCount($expectedCount, $result, 'Should not generate collection tag for associations');
    }

    /**
     * @return array
     */
    public function collectNestingDataDataProvider()
    {
        return [
            'should not return any data when no association on entity' => [[], [], 0],
            'should collect one to one associations'                   =>
                [
                    [self::TEST_ASSOCIATION_FIELD => new EntityStub()],
                    [self::TEST_ASSOCIATION_FIELD => ['type' => ClassMetadata::ONE_TO_ONE]],
                    1
                ],
            'should collect all collection associations'               =>
                [
                    [
                        self::TEST_ASSOCIATION_FIELD => new PersistentCollectionStub([
                                new EntityStub(),
                                new EntityStub()
                            ])
                    ],
                    [self::TEST_ASSOCIATION_FIELD => ['type' => ClassMetadata::ONE_TO_MANY]],
                    2
                ],
            'should process all associated values'                     =>
                [
                    [
                        self::TEST_ASSOCIATION_FIELD . '_1' => new PersistentCollectionStub([
                                new EntityStub(),
                                new EntityStub()
                            ]),
                        self::TEST_ASSOCIATION_FIELD . '_2' => new EntityStub()
                    ],
                    [
                        self::TEST_ASSOCIATION_FIELD . '_1' => ['type' => ClassMetadata::ONE_TO_MANY],
                        self::TEST_ASSOCIATION_FIELD . '_2' => ['type' => ClassMetadata::ONE_TO_ONE]
                    ],
                    3
                ],
        ];
    }

    /**
     * @param mixed $data
     *
     * @return \PHPUnit_Framework_MockObject_MockObject
     */
    protected function getFormMock($data)
    {
        $form = $this->getMockBuilder('Symfony\Component\Form\Form')
            ->disableOriginalConstructor()->getMock();
        $form->expects($this->any())->method('getData')
            ->will($this->returnValue($data));

        return $form;
    }
}
