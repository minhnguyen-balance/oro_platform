<?php

namespace Oro\Bundle\EmailBundle\Tests\Unit\Entity;

use Oro\Bundle\EmailBundle\Tests\Unit\Entity\TestFixtures\EmailAddress;
use Oro\Bundle\EmailBundle\Tests\Unit\ReflectionUtil;

class EmailAddressTest extends \PHPUnit_Framework_TestCase
{
    public function testIdGetter()
    {
        $entity = new EmailAddress();
        ReflectionUtil::setId($entity, 1);
        $this->assertEquals(1, $entity->getId());
    }

    public function testEmailGetterAndSetter()
    {
        $entity = new EmailAddress();
        $entity->setEmail('test');
        $this->assertEquals('test', $entity->getEmail());
    }

    public function testCreatedAtGetterAndSetter()
    {
        $date = new \DateTime('now', new \DateTimeZone('UTC'));

        $entity = new EmailAddress($date);
        $this->assertEquals($date, $entity->getCreatedAt());
    }

    public function testUpdatedAtGetterAndSetter()
    {
        $date = new \DateTime('now', new \DateTimeZone('UTC'));

        $entity = new EmailAddress($date);
        $this->assertEquals($date, $entity->getUpdatedAt());
    }
}
