# Cool SMS Laravel

[CoolSMS PHP SDK](https://github.com/coolsms/php-sdk) Wrapper for Laravel


Installation
------------
install using composer:
```bash
 composer require acidf0x/laracool
```
Then publish the package configuration using Artisan:
```bash
 php artisan vendor:publish --provider=AcidF0x\LaraCool\CoolSMSServiceProvider
```

Update your settings in the generated app/config/coolsms.php configuration file.
```php
return [
    // api_key and api_secret can be obtained from coolsms.co.kr
    'api' => [
        'key' => 'YOUR_API_KEY',
        'secret' => 'YOUR_API_SECRET',
    ],
];
```

The ```AcidF0x\LaraCool\CoolSMSServiceProvider``` is auto-discovered and registered by default, but if you want to register it yourself:
Add the ServiceProvider in ```config/app.php```
```php

'providers' => [
    ...
    ...
    AcidF0x\LaraCool\CoolSMSServiceProvider::class,
]
```

The ```CoolSMS``` facade is also auto-discovered, but if you want to add it manually:
Add the Facade in ```config/app.php```
```php
'aliases' => [
    ...
    'CoolSMS' => AcidF0x\LaraCool\Facades\CoolSMS::class,
]

```

Basic Usage
-----------

```php
use AcidF0x\LaraCool\Facades\CoolSMS;
use Nurigo\Exceptions\CoolsmsException;

  try {
      // 4 options(to, from, type, text) are mandatory. must be filled
      $options = new \stdClass();
      $options->to = '01000000000';
      $options->from = '0100000000';
      $options->type = 'SMS';
      $options->text = 'text';
      $result = CoolSMS::message()->send($options);
      dump($result);
  } catch (CoolsmsException $e) {
      dump($e->getMessage()); // get error message
      dump($e->getResponseCode()); // get 'api.coolsms.co.kr' response code
  }

```
See Detail [CoolSMS SDK Example](https://www.coolsms.co.kr/PHP_SDK_Example)



```php
CoolSMS::message() // return \Nurigo\Api\Message
CoolSMS::groupMessage() // return \Nurigo\Api\GroupMessage
CoolSMS::image() // \Nurigo\Api\Image
CoolSMS::senderID() // \Nurigo\Api\SenderID
```

Requirements
----------- 
* Laravel 5.*
* PHP 5.5 or greater
* Composer
* PHP CURL extension
* PHP JSON extension
