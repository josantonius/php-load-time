<?php
/**
 * Calculate load time of pages or scripts.
 *
 * @author    Josantonius <hello@josantonius.com>
 * @copyright 2017 (c) Josantonius - PHP-LoadTime
 * @license   https://opensource.org/licenses/MIT - The MIT License (MIT)
 * @link      https://github.com/Josantonius/PHP-LoadTime
 * @since     1.1.4
 */

namespace Josantonius\LoadTime;

use PHPUnit\Framework\TestCase;

/**
 * Tests class for LoadTime library.
 *
 * @since 1.1.4
 */
class LoadTimeTest extends TestCase
{
    /**
     * Start chronometer.
     *
     * @since 1.1.4
     *
     * @return void
     */
    public function testStart()
    {
        $this->assertInternalType('float', LoadTime::start());
    }

    /**
     * Test chronometer is active.
     *
     * @since 1.1.4
     *
     * @return void
     */
    public function testIsActiveTrue()
    {
        $this->assertTrue(LoadTime::isActive());
    }

    /**
     * End chronometer.
     *
     * @since 1.1.4
     *
     * @return void
     */
    public function testEnd()
    {
        $this->assertInternalType('float', LoadTime::end());
    }

    /**
     * Test chronometer is inactive.
     *
     * @since 1.1.4
     *
     * @return void
     */
    public function testIsActiveFalse()
    {
        $this->assertFalse(LoadTime::isActive());
    }

    /**
     * Test chronometer is inactive.
     *
     * @since 1.1.4
     *
     * @return void
     */
    public function testEndError()
    {
        $this->assertFalse(LoadTime::end());
    }
}
