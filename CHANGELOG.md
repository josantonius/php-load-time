# CHANGELOG

## 1.1.8 - 2022-08-17

The repository was archived.

## 1.1.7 - 2018-01-06

* The tests were fixed.

* Changes in documentation.

## 1.1.6 - 2017-11-09

* Implemented `PHP Mess Detector` to detect inconsistencies in code styles.

* Implemented `PHP Code Beautifier and Fixer` to fixing errors automatically.

* Implemented `PHP Coding Standards Fixer` to organize PHP code automatically according to PSR standards.

## 1.1.5 - 2017-11-02

* Implemented `PSR-4 autoloader standard` from all library files.

* Implemented `PSR-2 coding standard` from all library PHP files.

* Implemented `PHPCS` to ensure that PHP code complies with `PSR2` code standards.

* Implemented `Codacy` to automates code reviews and monitors code quality over time.

* Implemented `Codecov` to coverage reports.

* Added `LoadTime/phpcs.ruleset.xml` file.

* Deleted `LoadTime/src/bootstrap.php` file.

* Deleted `LoadTime/tests/bootstrap.php` file.

* Deleted `LoadTime/vendor` folder.

* Changed `Josantonius\LoadTime\Test\LoadTimeTest` class to  `Josantonius\LoadTime\LoadTimeTest` class.

## 1.1.4 - 2017-09-14

* Unit tests supported by `PHPUnit` were added.

* The repository was synchronized with Travis CI to implement continuous integration.

* Added `LoadTime/src/bootstrap.php` file

* Added `LoadTime/tests/bootstrap.php` file.

* Added `LoadTime/phpunit.xml.dist` file.
* Added `LoadTime/_config.yml` file.
* Added `LoadTime/.travis.yml` file.

* Deleted `Josantonius\LoadTime\Tests\LoadTimeTest` class.
* Deleted `Josantonius\LoadTime\Tests\LoadTimeTest::testLoadTimeScript()` method.

* Added `Josantonius\LoadTime\Test\LoadTimeTest` class.
* Added `Josantonius\LoadTime\Test\LoadTimeTest::testStart()` method.
* Added `Josantonius\LoadTime\Test\LoadTimeTest::testIsActiveTrue()` method.
* Added `Josantonius\LoadTime\Test\LoadTimeTest::testEnd()` method.
* Added `Josantonius\LoadTime\Test\LoadTimeTest::testIsActiveFalse()` method.
* Added `Josantonius\LoadTime\Test\LoadTimeTest::testEndError()` method.

## 1.1.3 - 2017-07-16

* Deleted `Josantonius\LoadTime\LoadTime` class.
* Deleted `Josantonius\LoadTime\LoadTime::start()` method.
* Deleted `Josantonius\LoadTime\LoadTime::end()` method.

## 1.1.2 - 2017-07-04

* Added `Josantonius\LoadTime\LoadTime::isActive()` method.

## 1.1.1 - 2017-03-18

* Some files were excluded from download and comments and readme files were updated.

## 1.1.0 - 2017-01-30

* Compatible with PHP 5.6 or higher.

## 1.0.0 - 2017-01-30

* Compatible only with PHP 7.0 or higher. In the next versions, the library will be modified to make it compatible with PHP 5.6 or higher.

## 1.0.0 - 2017-01-17

* Added `Josantonius\LoadTime\LoadTime` class.
* Added `Josantonius\LoadTime\LoadTime::start()` method.
* Added `Josantonius\LoadTime\LoadTime::end()` method.

## 1.0.0 - 2017-01-17

* Added `Josantonius\LoadTime\Exception\LoadTimeException` class.
* Added `Josantonius\LoadTime\Exception\Exceptions` abstract class.
* Added `Josantonius\LoadTime\Exception\LoadTimeException->__construct()` method.

## 1.0.0 - 2017-01-17

* Added `Josantonius\LoadTime\Tests\LoadTimeTest` class.
* Added `Josantonius\LoadTime\Tests\LoadTimeTest::testLoadTimeScript()` method.
