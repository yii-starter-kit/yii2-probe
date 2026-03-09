System Information Provider
================================
[![CI](https://github.com/yii-starter-kit/yii2-probe/actions/workflows/ci.yml/badge.svg)](https://github.com/yii-starter-kit/yii2-probe/actions/workflows/ci.yml)

Requires **PHP 8.4+**.

This package provides an easy interface to get information about the system it is running on.

```php
$provider = \YiiStarterKit\Probe\ProviderFactory::create();
$provider->getCpuModel();
$provider->getCpuUsage();
$provider->getFreeMem();
```

## Available methods
- getOsRelease()
- getOsType()
- getOsKernelVersion()
- getArchitecture()
- getDbVersion(\PDO $connection)
- getDbInfo(\PDO $connection)
- getDbType(\PDO $connection)
- getTotalMem()
- getFreeMem()
- getUsedMem()
- getTotalSwap()
- getFreeSwap()
- getUsedSwap()
- getHostname()
- isLinuxOs()
- isWindowsOs()
- isBsdOs()
- isMacOs()
- getUptime()
- getPhysicalCpus()
- getCpuCores()
- getCpuPhysicalCores()
- getCpuModel()
- getCpuUsage()
- getServerIP()
- getExternalIP()
- getServerSoftware()
- isISS()
- isNginx()
- isApache()
- getPhpInfo($what = -1)
- getPhpVersion()
- getPhpDisabledFunctions()
- getPhpModules()
- isPhpModuleLoaded($module)
- getPing(?array $hosts = null, $count = 2)
- getServerVariable($key)
- getPhpSapiName()
- isFpm()
- isCli()

## Supported OS
- Linux
- Windows
- MacOS

**Note**: To get Windows System Information, you must have `php_com_dotnet.dll` enabled in your `php.ini`.
```ini
[COM_DOT_NET]
extension=php_com_dotnet.dll
```

## Linux Specific methods
- getCoresPerSocket()
- getCpuinfoByLsCpu()

## Contributing
Any help in any way is welcome.

## TODO
- disk usage
- rx/tx
- processes list
