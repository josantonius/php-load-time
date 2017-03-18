<?php
/**
 * Calculate load time of pages or scripts.
 * 
 * @author     Josantonius - hello@josantonius.com
 * @copyright  Copyright (c) 2017
 * @license    https://opensource.org/licenses/MIT - The MIT License (MIT)
 * @link       https://github.com/Josantonius/PHP-LoadTime
 * @since      1.0.0
 */

namespace Josantonius\LoadTime;

# use Josantonius\LoadTime\Exception\LoadTimeException;

/**
 * Load time handler.
 *
 * @since 1.0.0
 */
class LoadTime {

    /**
     * Prefix for cookies.
     *
     * @since 1.0.0
     *
     * @var float
     */
    public static $startTime;

    /**
     * Set initial time.
     *
     * @since 1.0.0
     *
     * @return float → seconds
     */
    public static function start() {

        return static::$startTime = microtime(true);
    }

    /**
     * Set end time.
     *
     * @since 1.0.0
     *
     * @return float → seconds
     */
    public static function end() {

        return round((microtime(true) - static::$startTime), 4);
    }
}
