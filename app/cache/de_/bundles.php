<?php

return array(
    new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
    new Symfony\Bundle\SecurityBundle\SecurityBundle(),
    new Symfony\Bundle\TwigBundle\TwigBundle(),
    new Symfony\Bundle\MonologBundle\MonologBundle(),
    new Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle(),
    new Symfony\Bundle\AsseticBundle\AsseticBundle(),
    new Doctrine\Bundle\DoctrineBundle\DoctrineBundle(),
    new Doctrine\Bundle\FixturesBundle\DoctrineFixturesBundle(),
    new Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle(),
    new JMS\SerializerBundle\JMSSerializerBundle($this),
    new Knp\Bundle\PaginatorBundle\KnpPaginatorBundle(),
    new Knp\Bundle\MenuBundle\KnpMenuBundle(),
    new FOS\RestBundle\FOSRestBundle(),
    new FOS\JsRoutingBundle\FOSJsRoutingBundle(),
    new Nelmio\ApiDocBundle\NelmioApiDocBundle(),
    new BeSimple\SoapBundle\BeSimpleSoapBundle(),
    new Stof\DoctrineExtensionsBundle\StofDoctrineExtensionsBundle(),
    new Escape\WSSEAuthenticationBundle\EscapeWSSEAuthenticationBundle(),
    new Liip\ImagineBundle\LiipImagineBundle(),
    new Genemu\Bundle\FormBundle\GenemuFormBundle(),
    new A2lix\TranslationFormBundle\A2lixTranslationFormBundle(),
    new Lexik\Bundle\MaintenanceBundle\LexikMaintenanceBundle(),
    new Oro\Bundle\SecurityBundle\OroSecurityBundle(),
    new Oro\Bundle\UIBundle\OroUIBundle(),
    new Oro\Bundle\EntityBundle\OroEntityBundle(),
    new JDare\ClankBundle\JDareClankBundle(),
    new JMS\JobQueueBundle\JMSJobQueueBundle(),
    new Oro\Bundle\AddressBundle\OroAddressBundle(),
    new Oro\Bundle\AsseticBundle\OroAsseticBundle(),
    new Oro\Bundle\BatchBundle\OroBatchBundle(),
    new Oro\Bundle\BusinessEntitiesBundle\OroBusinessEntitiesBundle(),
    new Oro\Bundle\CalendarBundle\OroCalendarBundle(),
    new Oro\Bundle\ConfigBundle\OroConfigBundle(),
    new Oro\Bundle\CronBundle\OroCronBundle(),
    new Oro\Bundle\DashboardBundle\OroDashboardBundle(),
    new Oro\Bundle\DataAuditBundle\OroDataAuditBundle(),
    new Oro\Bundle\DataGridBundle\OroDataGridBundle(),
    new Oro\Bundle\DistributionBundle\OroDistributionBundle(),
    new Oro\Bundle\EmailBundle\OroEmailBundle(),
    new Oro\Bundle\EntityConfigBundle\OroEntityConfigBundle(),
    new Oro\Bundle\EntityExtendBundle\OroEntityExtendBundle($this),
    new Oro\Bundle\FilterBundle\OroFilterBundle(),
    new Oro\Bundle\FormBundle\OroFormBundle(),
    new Oro\Bundle\HelpBundle\OroHelpBundle(),
    new Oro\Bundle\ImapBundle\OroImapBundle(),
    new Oro\Bundle\ImportExportBundle\OroImportExportBundle(),
    new Oro\Bundle\InstallerBundle\OroInstallerBundle(),
    new Oro\Bundle\IntegrationBundle\OroIntegrationBundle(),
    new Oro\Bundle\LocaleBundle\OroLocaleBundle(),
    new Oro\Bundle\MeasureBundle\OroMeasureBundle(),
    new Oro\Bundle\NotificationBundle\OroNotificationBundle($this),
    new Oro\Bundle\OrganizationBundle\OroOrganizationBundle(),
    new Oro\Bundle\PlatformBundle\OroPlatformBundle(),
    new Oro\Bundle\QueryDesignerBundle\OroQueryDesignerBundle(),
    new Oro\Bundle\ReportBundle\OroReportBundle(),
    new Oro\Bundle\RequireJSBundle\OroRequireJSBundle(),
    new Oro\Bundle\SearchBundle\OroSearchBundle(),
    new Oro\Bundle\SegmentationTreeBundle\OroSegmentationTreeBundle(),
    new Oro\Bundle\SidebarBundle\OroSidebarBundle(),
    new Oro\Bundle\SoapBundle\OroSoapBundle(),
    new Oro\Bundle\SyncBundle\OroSyncBundle(),
    new Oro\Bundle\TagBundle\OroTagBundle(),
    new Oro\Bundle\ThemeBundle\OroThemeBundle(),
    new Oro\Bundle\TranslationBundle\OroTranslationBundle(),
    new Oro\Bundle\UserBundle\OroUserBundle(),
    new Oro\Bundle\WindowsBundle\OroWindowsBundle(),
    new Oro\Bundle\WorkflowBundle\OroWorkflowBundle(),
    new Sylius\Bundle\FlowBundle\SyliusFlowBundle(),
    new Oro\Bundle\NavigationBundle\OroNavigationBundle(),
);
