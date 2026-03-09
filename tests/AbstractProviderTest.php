<?php
/**
 * @author Eugene Terentev <eugene@terentev.net>
 */

namespace YiiStarterKit\Probe\Tests;

use YiiStarterKit\Probe\ProviderFactory;

class AbstractProviderTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @var \YiiStarterKit\Probe\Provider\AbstractProvider
     */
    protected $provider;

    public function setUp(): void
    {
        $this->provider = ProviderFactory::create();
    }

    public function testGetPhpVersion()
    {
        $this->assertEquals(phpversion(), $this->provider->getPhpVersion());
    }

    public function testGetPhpSapiName()
    {
        $this->assertEquals(php_sapi_name(), $this->provider->getPhpSapiName());
    }

    public function testBooleanResults()
    {
        $this->assertIsBool($this->provider->isNginx());
        $this->assertIsBool($this->provider->isApache());
        $this->assertIsBool($this->provider->isISS());
        $this->assertIsBool($this->provider->isBsdOs());
        $this->assertIsBool($this->provider->isLinuxOs());
        $this->assertIsBool($this->provider->isWindowsOs());
        $this->assertIsBool($this->provider->isMacOs());
        $this->assertIsBool($this->provider->isCli());
        $this->assertIsBool($this->provider->isFpm());
    }

    public function testStringResults()
    {
        $this->assertIsString($this->provider->getOsRelease());
        $this->assertIsString($this->provider->getOsType());
        $this->assertIsString($this->provider->getOsKernelVersion());
        $this->assertIsString($this->provider->getArchitecture());
        $this->assertIsString($this->provider->getCpuModel());
        $this->assertIsString($this->provider->getCpuVendor());
        $this->assertIsString($this->provider->getPhpInfo());
    }

    public function testIntegerResults()
    {
        $this->assertIsInt($this->provider->getTotalMem());
        $this->assertGreaterThan(0, $this->provider->getTotalMem());
        $this->assertIsInt($this->provider->getFreeMem());
        $this->assertIsInt($this->provider->getUsedMem());
    }

    public function testGetUptime()
    {
        $this->assertIsInt($this->provider->getUptime());
        $this->assertGreaterThan(0, $this->provider->getUptime());
    }

    public function testNoException()
    {
        try {
            $this->provider->getCpuUsage();
        } catch (\Exception $notExpected) {
            $this->fail();
        }
        $this->assertTrue(true);
    }
}
