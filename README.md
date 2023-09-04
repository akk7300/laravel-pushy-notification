# Introduction

This package allows you to send push notifications using [Pushy](https://pushy.me/). It provides a convenient way to integrate Pushy's services into your Laravel applications.

## Installation

You can install the package via Composer:

```bash
composer require akk7300/pushy
```

## Usage

 ```php
use Akk7300\Pushy\Facade\Pushy;

Pushy::withTitle('Testing')
    ->withBody('Testing message')
    ->withAdditional(['extra' => 'This is an extra field'])
    ->sendTo(['pushy-token']);
```

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.


## Laravel Package Boilerplate

This package was generated using the [Laravel Package Boilerplate](https://laravelpackageboilerplate.com).
