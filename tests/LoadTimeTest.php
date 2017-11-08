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
     * LoadTime instance.
     *
     * @since 1.1.6
     *
     * @var object
     */
    protected $LoadTime;

    /**
     * Set up.
     *
     * @since 1.1.6
     */
    public function setUp()
    {
        parent::setUp();

        $this->LoadTime = new LoadTime;
    }

    /**
     * Check if it is an instance of LoadTime.
     *
     * @since 1.1.6
     */
    public function testIsInstanceOfLoadTime()
    {
        $actual = $this->LoadTime;
        $this->assertInstanceOf('Josantonius\LoadTime\LoadTime', $actual);
    }

    /**
     * Start chronometer.
     *
     * @since 1.1.4
     */
    public function testStart()
    {
        $this->assertInternalType('float', $this->LoadTime->start());
    }

    /**
     * Test chronometer is active.
     *
     * @since 1.1.4
     */
    public function testIsActiveTrue()
    {
        $this->assertTrue($this->LoadTime->isActive());
    }

    /**
     * End chronometer.
     *
     * @since 1.1.4
     */
    public function testEnd()
    {
        $this->assertInternalType('float', $this->LoadTime->end());
    }

    /**
     * Test chronometer is inactive.
     *
     * @since 1.1.4
     */
    public function testIsActiveFalse()
    {
        $this->assertFalse($this->LoadTime->isActive());
    }

    /**
     * Test chronometer is inactive.
     *
     * @since 1.1.4
     */
    public function testEndError()
    {
        $this->assertFalse($this->LoadTime->end());
    }
}
