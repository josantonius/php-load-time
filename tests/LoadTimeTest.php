<?php 
/**
 * Calculate load time of pages or scripts.
 * 
 * @category   JST
 * @package    LoadTime
 * @subpackage LoadTimeTest
 * @author     Josantonius - info@josantonius.com
 * @copyright  Copyright (c) 2017 JST PHP Framework
 * @license    https://opensource.org/licenses/MIT - The MIT License (MIT)
 * @version    1.1.0
 * @link       https://github.com/Josantonius/PHP-LoadTime
 * @since      File available since 1.0.0 - Update: 2017-01-30
 */

namespace Josantonius\LoadTime\Tests;

use Josantonius\LoadTime\LoadTime;

/**
 * Tests class for LoadTime library.
 *
 * @since 1.0.0
 */
class LoadTimeTest {

    /**
     * Calculate load time of script.
     *
     * @since 1.0.0
     *
     * @return float → seconds
     */
    public static function testLoadTimeScript() {

        LoadTime::start();

        for ($i=0; $i < 100000; $i++) { 
            // print_r($i . ' ');
        }

        print_r('Script executed in: ' . LoadTime::end() . ' seconds.'); 
    }
}