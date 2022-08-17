# PHP LoadTime library

[![Latest Stable Version](https://poser.pugx.org/josantonius/LoadTime/v/stable)](https://packagist.org/packages/josantonius/LoadTime)
[![License](https://poser.pugx.org/josantonius/LoadTime/license)](LICENSE)

[English version](README.md)

Calcular tiempo de carga de páginas o scripts.

---

- [Requisitos](#requisitos)
- [Instalación](#instalación)
- [Métodos disponibles](#métodos-disponibles)
- [Cómo empezar](#cómo-empezar)
- [Uso](#uso)
- [Patrocinar](#patrocinar)
- [Licencia](#licencia)

---

## Requisitos

Esta clase es soportada por versiones de **PHP 5.6** o superiores y es compatible con versiones de **HHVM 3.0** o superiores.

## Instalación

La mejor forma de instalar esta extensión es a través de [Composer](http://getcomposer.org/download/).

Para instalar **PHP LoadTime library**, simplemente escribe:

    composer require Josantonius/LoadTime

El comando anterior sólo instalará los archivos necesarios, si prefieres **descargar todo el código fuente** puedes utilizar:

    composer require Josantonius/LoadTime --prefer-source

También puedes **clonar el repositorio** completo con Git:

  $ git clone <https://github.com/Josantonius/php-load-time.git>

O **instalarlo manualmente**:

[Descargar LoadTime.php](https://raw.githubusercontent.com/Josantonius/php-load-time/master/src/LoadTime.php):

    wget https://raw.githubusercontent.com/Josantonius/php-load-time/master/src/LoadTime.php

## Métodos disponibles

Métodos disponibles en esta biblioteca:

### - Activar temporizador

```php
LoadTime::start();
```

**# Return** (float) → microtime

### - Detener temporizador

```php
LoadTime::end();
```

**# Return** (float) → segundos

### - Comprobar si se ha iniciado el temporizador

```php
LoadTime::isActive();
```

**# Return** (boolean)

## Cómo empezar y ejemplos

Para utilizar esta biblioteca, simplemente:

Para utilizar esta biblioteca con **Composer**:

```php
require __DIR__ . '/vendor/autoload.php';

use Josantonius\LoadTime\LoadTime;
```

Si la instalaste **manualmente**, utiliza:

```php
require_once __DIR__ . '/LoadTime.php';

use Josantonius\LoadTime\LoadTime;
```

## Uso

Ejemplo de uso para esta biblioteca:

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

Para ejecutar las [pruebas](tests) necesitarás [Composer](http://getcomposer.org/download/) y seguir los siguientes pasos:

    git clone https://github.com/Josantonius/php-load-time.git
    
    cd php-load-time

    composer install

Ejecutar pruebas unitarias con [PHPUnit](https://phpunit.de/):

    composer phpunit

Ejecutar pruebas de estándares de código [PSR2](http://www.php-fig.org/psr/psr-2/) con [PHPCS](https://github.com/squizlabs/PHP_CodeSniffer):

    composer phpcs

Ejecutar pruebas con [PHP Mess Detector](https://phpmd.org/) para detectar inconsistencias en el estilo de codificación:

    composer phpmd

Ejecutar todas las pruebas anteriores:

    composer tests

## Patrocinar

Si este proyecto te ayuda a reducir el tiempo de desarrollo,
[puedes patrocinarme](https://github.com/josantonius/lang/es-ES/README.md#patrocinar)
para apoyar mi trabajo :blush:

## Licencia

Este repositorio tiene una licencia [MIT License](LICENSE).

Copyright © 2017-2022, [Josantonius](https://github.com/josantonius/lang/es-ES/README.md#contacto)
