<?php

namespace Oro\Bundle\EmailBundle\DataFixtures\ORM;

class LoadEmailTemplates extends AbstractEmailFixture
{
    /**
     * Return path to email templates
     *
     * @return string
     */
    public function getEmailsDir()
    {
        return __DIR__ . DIRECTORY_SEPARATOR . '../data/emails';
    }
}
