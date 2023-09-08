# Introduction

This package allows you to send push notifications using [Pushy](https://pushy.me/). It provides a convenient way to integrate Pushy's services into your Laravel applications.

## Installation

You can install the package via Composer:

```bash
composer require akk7300/pushy
```

**Copy Config**

Run `php artisan vendor:publish --provider="Akk7300\Pushy\PushyServiceProvider"` to publish the `pushy.php` config file.

**Get API Secret Key**

Get Authentication Key from https://dashboard.pushy.me/

**Configure pushy.php as needed**

```
'api_key' => '{API_SECRET_KEY}'
```

## Usage

 ```php
use Akk7300\Pushy\Facade\Pushy;

Pushy::withTitle('Testing')
    ->withBody('Testing message')
    ->withData(['message' => 'This is an message field'])
    ->sendTo(['pushy-token']);
```

## Laravel Package Boilerplate

This package was generated using the [Laravel Package Boilerplate](https://laravelpackageboilerplate.com).
