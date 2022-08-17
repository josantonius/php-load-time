# PHP LoadTime library

[![Latest Stable Version](https://poser.pugx.org/josantonius/LoadTime/v/stable)](https://packagist.org/packages/josantonius/LoadTime)
[![License](https://poser.pugx.org/josantonius/LoadTime/license)](LICENSE)

Calculate load time of pages or scripts.

---

- [Requirements](#requirements)
- [Installation](#installation)
- [Available Methods](#available-methods)
- [Quick Start](#quick-start)
- [Usage](#usage)
- [Tests](#tests)
- [Sponsor](#Sponsor)
- [License](#license)

---

## Requirements

This library is supported by **PHP versions 5.6** or higher and is compatible with **HHVM versions 3.0** or higher.

## Installation

The preferred way to install this extension is through [Composer](http://getcomposer.org/download/).

To install **PHP LoadTime library**, simply:

    composer require Josantonius/LoadTime

The previous command will only install the necessary files, if you prefer to **download the entire source code** you can use:

    composer require Josantonius/LoadTime --prefer-source

You can also **clone the complete repository** with Git:

  $ git clone <https://github.com/Josantonius/php-Load-time.git>

Or **install it manually**:

[Download LoadTime.php](https://raw.githubusercontent.com/Josantonius/php-Load-time/master/src/LoadTime.php):

    wget https://raw.githubusercontent.com/Josantonius/php-Load-time/master/src/LoadTime.php

## Available Methods

Available methods in this library:

### - Set initial time

```php
LoadTime::start();
```

**# Return** (float) → microtime

### - Set end time

```php
LoadTime::end();
```

**# Return** (float) → seconds

### - Check if the timer has been started

```php
LoadTime::isActive();
```

**# Return** (boolean)

## Quick Start

To use this library with **Composer**:

```php
require __DIR__ . '/vendor/autoload.php';

use Josantonius\LoadTime\LoadTime;
```

Or If you installed it **manually**, use it:

```php
require_once __DIR__ . '/LoadTime.php';

use Josantonius\LoadTime\LoadTime;
```

## Usage

Example of use for this library:

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use Josantonius\LoadTime\LoadTime;

LoadTime::start();

for ($i=0; $i < 100000; $i++) { 
    // print_r($i . ' ');
}

print_r('Script executed in: ' . LoadTime::end() . ' seconds.'); 

/* Script executed in: 0.0012 seconds. */
```

## Tests

To run [tests](tests) you just need [composer](http://getcomposer.org/download/) and to execute the following:

    git clone https://github.com/Josantonius/php-Load-time.git
    
    cd php-Load-time

    composer install

Run unit tests with [PHPUnit](https://phpunit.de/):

    composer phpunit

Run [PSR2](http://www.php-fig.org/psr/psr-2/) code standard tests with [PHPCS](https://github.com/squizlabs/PHP_CodeSniffer):

    composer phpcs

Run [PHP Mess Detector](https://phpmd.org/) tests to detect inconsistencies in code style:

    composer phpmd

Run all previous tests:

    composer tests

## Sponsor

If this project helps you to reduce your development time,
[you can sponsor me](https://github.com/josantonius#sponsor) to support my open source work :blush:

## License

This repository is licensed under the [MIT License](LICENSE).

Copyright © 2017-2022, [Josantonius](https://github.com/josantonius#contact)
