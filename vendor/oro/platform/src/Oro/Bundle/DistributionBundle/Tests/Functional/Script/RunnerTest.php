<?php
namespace Oro\Bundle\DistributionBundle\Tests\Functional\Script;

use Composer\Installer\InstallationManager;
use Composer\Package\PackageInterface;

use Oro\Bundle\TestFrameworkBundle\Test\Client;
use Oro\Bundle\DistributionBundle\Script\Runner;
use Oro\Bundle\TestFrameworkBundle\Test\WebTestCase;

class RunnerTest extends WebTestCase
{
    /**
     * @var Client
     */
    protected $client;

    /**
     * @var string
     */
    protected $applicationRootDir;

    public function setUp()
    {
        $this->client = static::createClient();
        $this->applicationRootDir = $this->client->getKernel()->getRootDir();
    }

    /**
     * @test
     */
    public function shouldBeConstructedWithInstallationManager()
    {
        new Runner($this->createInstallationManagerMock(), 'path/to/application/root/dir', 'test');
    }

    /**
     * @test
     */
    public function shouldRunValidInstallScriptOfPackageAndReturnOutput()
    {
        $package = $this->createPackageMock();
        $targetDir = __DIR__ . '/../Fixture/Script/valid';
        $runner = $this->createRunner($package, $targetDir);
        $expectedOutput = $this->formatExpectedResult(
            'Valid install script',
            $targetDir . '/install.php',
            'The install script was executed'
        );

        $this->assertEquals($expectedOutput, $runner->install($package));
    }

    /**
     * @test
     */
    public function shouldDoNothingWhenInstallScriptIsAbsent()
    {
        $package = $this->createPackageMock();
        $runner = $this->createRunner($package, __DIR__ . '/../Fixture/Script/empty');
        $this->assertNull($runner->install($package));
    }

    /**
     * @test
     *
     * @expectedException \Symfony\Component\Process\Exception\ProcessFailedException
     * @expectedExceptionMessage The command
     */
    public function throwExceptionWhenProcessFailed()
    {
        $package = $this->createPackageMock();
        $runner = $this->createRunner($package, __DIR__ . '/../Fixture/Script/invalid');
        $runner->install($package);
    }

    /**
     * @test
     */
    public function shouldRunValidUninstallScriptOfPackageAndReturnOutput()
    {
        $package = $this->createPackageMock();
        $targetDir = __DIR__ . '/../Fixture/Script/valid';
        $runner = $this->createRunner($package, $targetDir);
        $expectedOutput = $this->formatExpectedResult(
            'Valid uninstall script',
            $targetDir . '/uninstall.php',
            'The uninstall script was executed'
        );

        $this->assertEquals($expectedOutput, $runner->uninstall($package));
    }

    /**
     * @test
     */
    public function shouldDoNothingWhenUninstallScriptIsAbsent()
    {
        $package = $this->createPackageMock();
        $runner = $this->createRunner($package, __DIR__ . '/../Fixture/Script/empty');
        $this->assertNull($runner->uninstall($package));
    }

    /**
     * @test
     *
     * @expectedException \Symfony\Component\Process\Exception\ProcessFailedException
     * @expectedExceptionMessage The command
     */
    public function throwExceptionWhenProcessFailedDuringUninstalling()
    {
        $package = $this->createPackageMock();
        $runner = $this->createRunner($package, __DIR__ . '/../Fixture/Script/invalid');
        $runner->uninstall($package);
    }

    /**
     * @test
     */
    public function shouldRunValidUpdateScriptOfPackageAndReturnOutput()
    {
        $package = $this->createPackageMock();
        $targetDir = __DIR__ . '/../Fixture/Script/valid';
        $runner = $this->createRunner($package, $targetDir);
        $expectedOutput = $this->formatExpectedResult(
            'Valid update script',
            $targetDir . '/update.php',
            'The update script was executed'
        );

        $this->assertEquals($expectedOutput, $runner->update($package, 'any version'));
    }

    /**
     * @test
     */
    public function shouldDoNothingWhenUpdateScriptIsAbsent()
    {
        $package = $this->createPackageMock();
        $runner = $this->createRunner($package, __DIR__ . '/../Fixture/Script/empty');
        $this->assertNull($runner->update($package, 'any version'));
    }

    /**
     * @test
     *
     * @expectedException \Symfony\Component\Process\Exception\ProcessFailedException
     * @expectedExceptionMessage The command
     */
    public function throwExceptionWhenProcessFailedDuringUpdating()
    {
        $package = $this->createPackageMock();
        $runner = $this->createRunner($package, __DIR__ . '/../Fixture/Script/invalid');
        $runner->update($package, 'any version');
    }

    /**
     * @test
     */
    public function shouldRunMigrationScriptsUpToCurrentPackageVersionSimple()
    {
        $package = $this->createPackageMock();
        $targetDir = __DIR__ . '/../Fixture/Script/valid/update-migrations/simple';
        $runner = $this->createRunner($package, $targetDir);
        $expectedRunnerOutput = $this->formatExpectedResult(
            'Simple migration 2 script',
            $targetDir . DIRECTORY_SEPARATOR . 'update_2.php',
            'update 2'
        ) . PHP_EOL . $this->formatExpectedResult(
            'Simple migration 3 script',
            $targetDir . DIRECTORY_SEPARATOR . 'update_3.php',
            'update 3'
        );

        $this->assertEquals($expectedRunnerOutput, $runner->update($package, '1'));
    }

    /**
     * @test
     */
    public function shouldRunMigrationScriptsUpToCurrentPackageVersionComplex()
    {
        $package = $this->createPackageMock();
        $targetDir = __DIR__ . '/../Fixture/Script/valid/update-migrations/complex';
        $runner = $this->createRunner($package, $targetDir);
        $expectedRunnerOutput = $this->formatExpectedResult(
            'Complex migration 0_1_9_1 script',
            $targetDir . DIRECTORY_SEPARATOR . 'update_0.1.9.1.php',
            'update 0.1.9.1'
        ) . PHP_EOL . $this->formatExpectedResult(
            'Complex migration 0_1_10 script',
            $targetDir . DIRECTORY_SEPARATOR . 'update_0.1.10.php',
            'update 0.1.10'
        );

        $this->assertEquals($expectedRunnerOutput, $runner->update($package, '0.1.9'));
    }

    /**
     * @test
     */
    public function shouldRunUpdatePlatformCommandWithoutErrors()
    {
        $runner = $this->createRunner();
        $runner->runPlatformUpdate();
    }

    /**
     * @test
     */
    public function shouldRemoveCachedFiles()
    {
        $tempDir = sys_get_temp_dir() . '/platform-app-tmp';
        if (is_dir($tempDir)) {
            rmdir($tempDir);
        }
        mkdir($tempDir);

        $bundlesFileName = $tempDir . '/bundles.php';
        $containerFileName = $tempDir . '/' . uniqid() . 'ProjectContainer.php';
        touch($bundlesFileName);
        touch($containerFileName);

        //guard
        $this->assertFileExists($bundlesFileName);
        $this->assertFileExists($containerFileName);

        $runner = $this->createRunner(null, null, $tempDir);
        $runner->removeCachedFiles();

        $this->assertFileNotExists($bundlesFileName);
        $this->assertFileNotExists($containerFileName);
    }

    /**
     * @return \PHPUnit_Framework_MockObject_MockObject|PackageInterface
     */
    protected function createPackageMock()
    {
        return $this->getMock('Composer\Package\PackageInterface');
    }

    /**
     * @param \Composer\Package\PackageInterface $package
     * @param string $targetDir
     *
     * @return \PHPUnit_Framework_MockObject_MockObject|InstallationManager
     */
    protected function createInstallationManagerMock(PackageInterface $package = null, $targetDir = null)
    {
        $im = $this->getMock('Composer\Installer\InstallationManager');
        if ($package) {
            $im->expects($this->any())
                ->method('getInstallPath')
                ->with($package)
                ->will($this->returnValue($targetDir));
        }

        return $im;
    }

    /**
     * @param $annotationLabel
     * @param $pathToFile
     * @param $scriptOutput
     *
     * @return string
     */
    protected function formatExpectedResult($annotationLabel, $pathToFile, $scriptOutput)
    {
        $format = <<<OUTPUT
Launching "%s" (%s) script
%s

OUTPUT;

        return sprintf($format, $annotationLabel, $pathToFile, $scriptOutput);
    }

    /**
     * @param PackageInterface $package
     * @param string $targetDir
     * @param string $applicationRootDir
     * @return Runner
     */
    protected function createRunner($package = null, $targetDir = null, $applicationRootDir = null)
    {
        return new Runner(
            $this->createInstallationManagerMock($package, $targetDir),
            $applicationRootDir ? $applicationRootDir : $this->applicationRootDir,
            'test'
        );
    }
}
