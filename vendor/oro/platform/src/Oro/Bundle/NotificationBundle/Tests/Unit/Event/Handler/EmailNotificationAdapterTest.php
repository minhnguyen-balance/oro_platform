<?php

namespace Oro\Bundle\NotificationBundle\Tests\Unit\Event\Handler;

use Oro\Bundle\NotificationBundle\Entity\RecipientList;
use Oro\Bundle\NotificationBundle\Event\Handler\EmailNotificationAdapter;

class EmailNotificationAdapterTest extends \PHPUnit_Framework_TestCase
{
    /** @var EmailNotificationAdapter */
    private $adapter;

    /** @var mixed */
    private $entity;

    /** @var \PHPUnit_Framework_MockObject_MockObject */
    private $emailNotification;

    /** @var \PHPUnit_Framework_MockObject_MockObject */
    private $em;

    /** @var \PHPUnit_Framework_MockObject_MockObject */
    private $configProvider;

    protected function setUp()
    {
        $this->entity = new \stdClass();
        $this->emailNotification = $this->getMockBuilder('Oro\Bundle\NotificationBundle\Entity\EmailNotification')
            ->disableOriginalConstructor()
            ->getMock();
        $this->em = $this->getMockBuilder('Doctrine\ORM\EntityManager')
            ->disableOriginalConstructor()
            ->getMock();
        $this->configProvider = $this->getMockBuilder('Oro\Bundle\EntityConfigBundle\Provider\ConfigProvider')
            ->disableOriginalConstructor()
            ->getMock();

        $this->adapter = new EmailNotificationAdapter(
            $this->entity,
            $this->emailNotification,
            $this->em,
            $this->configProvider
        );
    }

    protected function tearDown()
    {
        unset($this->adapter);
        unset($this->entity);
        unset($this->emailNotification);
        unset($this->em);
    }

    public function testGetTemplate()
    {
        $template = $this->getMock('Oro\Bundle\EmailBundle\Entity\EmailTemplate');

        $this->emailNotification->expects($this->once())
            ->method('getTemplate')
            ->will($this->returnValue($template));


        $translation = $this->getMock('Oro\Bundle\EmailBundle\Entity\EmailTemplateTranslation');
        $translation->expects($this->once())
            ->method('getLocale')
            ->will($this->returnValue('en'));

        $translation->expects($this->once())
            ->method('getField')
            ->will($this->returnValue('subject'));

        $translation->expects($this->once())
            ->method('getContent')
            ->will($this->returnValue('testContent'));

        $template->expects($this->once())
            ->method('setSubject')
            ->with('testContent');

        $template->expects($this->once())
            ->method('getTranslations')
            ->will($this->returnValue([$translation]));

        $template->expects($this->once())
            ->method('setLocale');

        $this->assertEquals($template, $this->adapter->getTemplate('en'));
    }

    public function testGetRecipientEmails()
    {
        $emails = array("email");
        $recipientList = new RecipientList();
        $repo = $this->getMockBuilder('Oro\Bundle\NotificationBundle\Entity\Repository\RecipientListRepository')
            ->disableOriginalConstructor()
            ->getMock();

        $this->emailNotification->expects($this->once())
            ->method('getRecipientList')
            ->will($this->returnValue($recipientList));
        $this->em->expects($this->once())
            ->method('getRepository')
            ->with('Oro\Bundle\NotificationBundle\Entity\RecipientList')
            ->will($this->returnValue($repo));
        $repo->expects($this->once())
            ->method('getRecipientEmails')
            ->with($this->identicalTo($recipientList), $this->identicalTo($this->entity))
            ->will($this->returnValue($emails));

        $this->assertEquals($emails, $this->adapter->getRecipientEmails());
    }
}
