# PHP LoadTime library

[![Latest Stable Version](https://poser.pugx.org/josantonius/LoadTime/v/stable)](https://packagist.org/packages/josantonius/LoadTime) [![Latest Unstable Version](https://poser.pugx.org/josantonius/LoadTime/v/unstable)](https://packagist.org/packages/josantonius/LoadTime) [![License](https://poser.pugx.org/josantonius/LoadTime/license)](LICENSE) [![Codacy Badge](https://api.codacy.com/project/badge/Grade/57116769927e42828991c8f68fd76870)](https://www.codacy.com/app/Josantonius/PHP-LoadTime?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=Josantonius/PHP-LoadTime&amp;utm_campaign=Badge_Grade) [![Total Downloads](https://poser.pugx.org/josantonius/LoadTime/downloads)](https://packagist.org/packages/josantonius/LoadTime) [![Travis](https://travis-ci.org/Josantonius/PHP-LoadTime.svg)](https://travis-ci.org/Josantonius/PHP-LoadTime) [![PSR2](https://img.shields.io/badge/PSR-2-1abc9c.svg)](http://www.php-fig.org/psr/psr-2/) [![PSR4](https://img.shields.io/badge/PSR-4-9b59b6.svg)](http://www.php-fig.org/psr/psr-4/) [![CodeCov](https://codecov.io/gh/Josantonius/PHP-LoadTime/branch/master/graph/badge.svg)](https://codecov.io/gh/Josantonius/PHP-LoadTime)

[Versión en español](README-ES.md)

Calculate load time of pages or scripts.

---

- [Requirements](#requirements)
- [Installation](#installation)
- [Available Methods](#available-methods)
- [Quick Start](#quick-start)
- [Usage](#usage)
- [Tests](#tests)
- [TODO](#-todo)
- [Contribute](#contribute)
- [Repository](#repository)
- [License](#license)
- [Copyright](#copyright)

---

## Requirements

This library is supported by **PHP versions 5.6** or higher and is compatible with **HHVM versions 3.0** or higher.

## Installation

The preferred way to install this extension is through [Composer](http://getcomposer.org/download/).

To install **PHP LoadTime library**, simply:

    $ composer require Josantonius/LoadTime

The previous command will only install the necessary files, if you prefer to **download the entire source code** you can use:

    $ composer require Josantonius/LoadTime --prefer-source

You can also **clone the complete repository** with Git:

  $ git clone https://github.com/Josantonius/PHP-LoadTime.git

Or **install it manually**:

[Download LoadTime.php](https://raw.githubusercontent.com/Josantonius/PHP-LoadTime/master/src/LoadTime.php):

    $ wget https://raw.githubusercontent.com/Josantonius/PHP-LoadTime/master/src/LoadTime.php

## Available Methods

Available methods in this library:

### - Set initial time:

```php
LoadTime::start();
```

**# Return** (float) → microtime

### - Set end time:

```php
LoadTime::end();
```

**# Return** (float) → seconds

### - Check if the timer has been started:

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

    $ git clone https://github.com/Josantonius/PHP-LoadTime.git
    
    $ cd PHP-LoadTime

    $ composer install

Run unit tests with [PHPUnit](https://phpunit.de/):

    $ composer phpunit

Run [PSR2](http://www.php-fig.org/psr/psr-2/) code standard tests with [PHPCS](https://github.com/squizlabs/PHP_CodeSniffer):

    $ composer phpcs

Run [PHP Mess Detector](https://phpmd.org/) tests to detect inconsistencies in code style:

    $ composer phpmd

Run all previous tests:

    $ composer tests

## ☑ TODO

- [ ] Add new feature
- [ ] Improve tests
- [ ] Improve documentation
- [ ] Refactor code

## Contribute

If you would like to help, please take a look at the list of
[issues](https://github.com/Josantonius/PHP-LoadTime/issues) or the [To Do](#-todo) checklist.

**Pull requests**

* [Fork and clone](https://help.github.com/articles/fork-a-repo).
* Run the command `composer install` to install the dependencies.
  This will also install the [dev dependencies](https://getcomposer.org/doc/03-cli.md#install).
* Run the command `composer fix` to excute code standard fixers.
* Run the [tests](#tests).
* Create a **branch**, **commit**, **push** and send me a
  [pull request](https://help.github.com/articles/using-pull-requests).

## Repository

The file structure from this repository was created with [PHP-Skeleton](https://github.com/Josantonius/PHP-Skeleton).

## License

This project is licensed under **MIT license**. See the [LICENSE](LICENSE) file for more info.

## Copyright

2017 Josantonius, [josantonius.com](https://josantonius.com/)

If you find it useful, let me know :wink:

You can contact me on [Twitter](https://twitter.com/Josantonius) or through my [email](mailto:hello@josantonius.com).