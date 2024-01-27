# Rest-full Route

## About Rest-full Route

Rest-full Search is a small part of the Rest-Full framework.

You can find the application at: [rest-full/app](https://github.com/rest-full/app) and you can also see the framework skeleton at: [rest-full/rest-full](https://github.com/rest-full/rest-full).

## Installation

* Download [Composer](https://getcomposer.org/doc/00-intro.md) or update `composer self-update`.
* Run `php composer.phar require rest-full/route` or composer installed globally `compser require rest-full/route` or composer.json `"rest-full/route": "1.0.0"` and install or update.

## Usage

This Route
```
<?php

require_once __DIR__.'/../vendor/autoload.php';
require_once __DIR__.'/../config/pathServer.php';

use Restfull\Route\Route;

$route = new Route();
$route->get('/main/index','Main.index','main+index');
echo $route->uri('post');
```
## License

The rest-full framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).