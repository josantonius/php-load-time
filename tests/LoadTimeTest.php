<?php
/**
 * Calculate load time of pages or scripts.
 *
 * @author    Josantonius <hello@josantonius.com>
 * @copyright 2017 - 2018 (c) Josantonius - PHP-LoadTime
 * @license   https://opensource.org/licenses/MIT - The MIT License (MIT)
 * @link      https://github.com/Josantonius/PHP-LoadTime
 * @since     1.1.4
 */
namespace Josantonius\LoadTime;

use PHPUnit\Framework\TestCase;

/**
 * Tests class for LoadTime library.
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
        $this->assertInstanceOf('Josantonius\LoadTime\LoadTime', $this->LoadTime);
    }

    /**
     * Start chronometer.
     */
    public function testStart()
    {
        $loadTime = $this->LoadTime;

        $this->assertInternalType('float', $loadTime::start());
    }

    /**
     * Test chronometer is active.
     */
    public function testIsActiveTrue()
    {
        $loadTime = $this->LoadTime;

        $this->assertTrue($loadTime::isActive());
    }

    /**
     * End chronometer.
     */
    public function testEnd()
    {
        $loadTime = $this->LoadTime;

        $this->assertInternalType('float', $loadTime::end());
    }

    /**
     * Test chronometer is inactive.
     */
    public function testIsActiveFalse()
    {
        $loadTime = $this->LoadTime;

        $this->assertFalse($loadTime::isActive());
    }

    /**
     * Test chronometer is inactive.
     */
    public function testEndError()
    {
        $loadTime = $this->LoadTime;

        $this->assertFalse($loadTime::end());
    }
}
