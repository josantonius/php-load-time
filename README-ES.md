# PHP LoadTime library

[![Latest Stable Version](https://poser.pugx.org/josantonius/loadtime/v/stable)](https://packagist.org/packages/josantonius/loadtime) [![Total Downloads](https://poser.pugx.org/josantonius/loadtime/downloads)](https://packagist.org/packages/josantonius/loadtime) [![Latest Unstable Version](https://poser.pugx.org/josantonius/loadtime/v/unstable)](https://packagist.org/packages/josantonius/loadtime) [![License](https://poser.pugx.org/josantonius/loadtime/license)](https://packagist.org/packages/josantonius/loadtime)

[Spanish version](README-ES.md)

Calcular tiempo de carga de páginas o scripts.

---

- [Instalación](#instalación)
- [Requisitos](#requisitos)
- [Cómo empezar y ejemplos](#cómo-empezar-y-ejemplos)
- [Métodos disponibles](#métodos-disponibles)
- [Uso](#uso)
- [Tests](#tests)
- [Manejador de excepciones](#manejador-de-excepciones)
- [Contribuir](#contribuir)
- [Repositorio](#repositorio)
- [Autor](#autor)
- [Licencia](#licencia)

---

### Instalación 

La mejor forma de instalar esta extensión es a través de [composer](http://getcomposer.org/download/).

Para instalar PHP LoadTime library, simplemente escribe:

    $ composer require Josantonius/LoadTime

### Requisitos

Esta ĺibrería es soportada por versiones de PHP 5.6 o superiores y es compatible con versiones de HHVM 3.0 o superiores.

### Cómo empezar y ejemplos

Para utilizar esta librería, simplemente:

```php
require __DIR__ . '/vendor/autoload.php';

use Josantonius\LoadTime\LoadTime;
```
### Métodos disponibles

Métodos disponibles en esta librería:

```php
LoadTime::start();
LoadTime::end();
```
### Uso

Ejemplo de uso para esta librería:

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

### Tests 

Para utilizar la clase de [pruebas](tests), simplemente:

```php
<?php
$loader = require __DIR__ . '/vendor/autoload.php';

$loader->addPsr4('Josantonius\\LoadTime\\Tests\\', __DIR__ . '/vendor/josantonius/loadtime/tests');

use Josantonius\LoadTime\Tests\LoadTimeTest;
```
Métodos de prueba disponibles en esta librería:

```php
LoadTimeTest::testLoadTimeScript();
```

### Manejador de excepciones

Esta librería utiliza [control de excepciones](src/Exception) que puedes personalizar a tu gusto.
### Contribuir
1. Comprobar si hay incidencias abiertas o abrir una nueva para iniciar una discusión en torno a un fallo o función.
1. Bifurca la rama del repositorio en GitHub para iniciar la operación de ajuste.
1. Escribe una o más pruebas para la nueva característica o expón el error.
1. Haz cambios en el código para implementar la característica o reparar el fallo.
1. Envía pull request para fusionar los cambios y que sean publicados.

Esto está pensado para proyectos grandes y de larga duración.

### Repositorio

Los archivos de este repositorio se crearon y subieron automáticamente con [Reposgit Creator](https://github.com/Josantonius/BASH-Reposgit).

### Autor

Mantenido por [Josantonius](https://github.com/Josantonius/).

### Licencia

Este proyecto está licenciado bajo la **licencia MIT**. Consulta el archivo [LICENSE](LICENSE) para más información.