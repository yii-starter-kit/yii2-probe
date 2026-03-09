<?php
namespace YiiStarterKit\Probe\Tests;

use YiiStarterKit\Probe\ProviderFactory;

class ProviderFactoryTest extends \PHPUnit\Framework\TestCase
{
    public function testGetOsType()
    {
        $this->assertIsString(ProviderFactory::getOsType());
    }

    public function testGetProvider()
    {
        $this->assertInstanceOf('\YiiStarterKit\Probe\Provider\AbstractProvider', ProviderFactory::create());
    }
}
