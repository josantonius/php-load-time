<?php
/**
 * Calculate load time of pages or scripts.
 * 
 * @author     Josantonius - hello@josantonius.com
 * @copyright  Copyright (c) 2017
 * @license    https://opensource.org/licenses/MIT - The MIT License (MIT)
 * @link       https://github.com/Josantonius/PHP-LoadTime
 * @since      1.1.4
 */

$loader = require __DIR__ . '/../src/bootstrap.php';

$loader->add('Josantonius\LoadTime\Test', __DIR__);
