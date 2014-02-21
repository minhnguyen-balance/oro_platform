<?php

namespace Oro\Bundle\EmailBundle\Cache;

use Symfony\Component\HttpKernel\CacheWarmer\CacheWarmer;
use Symfony\Component\Filesystem\Filesystem;
use Oro\Bundle\EmailBundle\Entity\Provider\EmailOwnerProviderStorage;

class EntityCacheWarmer extends CacheWarmer
{
    /**
     * A list of class names of all email owners
     *
     * @var string[]
     */
    protected $emailOwnerClasses = array();

    /**
     * @var string
     */
    private $entityCacheDir;

    /**
     * @var string
     */
    private $entityCacheNamespace;

    /**
     * @var string
     */
    private $entityProxyNameTemplate;

    /**
     * Constructor.
     *
     * @param EmailOwnerProviderStorage $emailOwnerProviderStorage
     * @param string $entityCacheDir
     * @param string $entityCacheNamespace
     * @param string $entityProxyNameTemplate
     */
    public function __construct(
        EmailOwnerProviderStorage $emailOwnerProviderStorage,
        $entityCacheDir,
        $entityCacheNamespace,
        $entityProxyNameTemplate
    ) {
        foreach ($emailOwnerProviderStorage->getProviders() as $provider) {
            $this->emailOwnerClasses[count($this->emailOwnerClasses) + 1] = $provider->getEmailOwnerClass();
        }

        $this->entityCacheDir = $entityCacheDir;
        $this->entityCacheNamespace = $entityCacheNamespace;
        $this->entityProxyNameTemplate = $entityProxyNameTemplate;
    }

    /**
     * {inheritdoc}
     */
    public function warmUp($cacheDir)
    {
        $fs = $this->createFilesystem();
        $twig = $this->createTwigEnvironment();

        $entityCacheDir = sprintf('%s/%s', $this->entityCacheDir, str_replace('\\', '/', $this->entityCacheNamespace));

        // Ensure the cache directory exists
        if (!$fs->exists($entityCacheDir)) {
            $fs->mkdir($entityCacheDir, 0777);
        }

        // Temporary fix till EmailAddress will be moved to the cache folder
        $className = sprintf($this->entityProxyNameTemplate, 'EmailAddress');
        $fileName = sprintf('%s/%s.php', $entityCacheDir, $className);
        if (!$fs->exists($fileName)) {
            $this->processEmailAddressTemplate($entityCacheDir, $twig);
        }

        //$this->processEmailAddressTemplate($entityCacheDir, $twig);
    }

    /**
     * {inheritdoc}
     */
    public function isOptional()
    {
        return false;
    }

    /**
     * Create Filesystem object
     *
     * @return Filesystem
     */
    protected function createFilesystem()
    {
        return new Filesystem();
    }

    /**
     * Create Twig_Environment object
     *
     * @return \Twig_Environment
     */
    protected function createTwigEnvironment()
    {
        $entityTemplateDir = __DIR__ . '/../Resources/cache/Entity';

        return new \Twig_Environment(new \Twig_Loader_Filesystem($entityTemplateDir));
    }

    /**
     * Create a proxy class for EmailAddress entity and save it in cache
     *
     * @param string $entityCacheDir
     * @param \Twig_Environment $twig
     */
    protected function processEmailAddressTemplate($entityCacheDir, \Twig_Environment $twig)
    {
        $args = array();
        foreach ($this->emailOwnerClasses as $key => $emailOwnerClass) {
            $prefix = strtolower(substr($emailOwnerClass, 0, strpos($emailOwnerClass, '\\')));
            if ($prefix === 'oro' || $prefix === 'orocrm') {
                // do not use prefix if email's owner is a part of BAP and CRM
                $prefix = '';
            } else {
                $prefix .= '_';
            }
            $suffix = strtolower(substr($emailOwnerClass, strrpos($emailOwnerClass, '\\') + 1));

            $args[] = array(
                'targetEntity' => $emailOwnerClass,
                'columnName' => sprintf('owner_%s%s_id', $prefix, $suffix),
                'fieldName' => sprintf('owner%d', $key)
            );
        }

        $className = sprintf($this->entityProxyNameTemplate, 'EmailAddress');
        $content = $twig->render(
            'EmailAddress.php.twig',
            array(
                'namespace' => $this->entityCacheNamespace,
                'className' => $className,
                'owners' => $args
            )
        );

        $this->writeCacheFile(sprintf('%s/%s.php', $entityCacheDir, $className), $content);
    }
}
