<?php declare(strict_types=1);
/**
 * Calculate load time of pages or scripts.
 * 
 * @category   JST
 * @package    LoadTime
 * @subpackage LoadTimeException
 * @author     Josantonius - info@josantonius.com
 * @copyright  Copyright (c) 2017 JST PHP Framework
 * @license    https://opensource.org/licenses/MIT - The MIT License (MIT)
 * @version    1.0.0
 * @link       https://github.com/Josantonius/PHP-LoadTime
 * @since      File available since 1.0.0 - Update: 2017-01-17
 */

namespace Josantonius\LoadTime\Exception;

/**
 * Exception class for LoadTime library.
 *
 * You can use an exception and error handler with this library.
 *
 * @since 1.0.0
 *
 * @link https://github.com/Josantonius/PHP-ErrorHandler
 */
class LoadTimeException extends \Exception { 

    /**
     * Exception handler.
     *
     * @since 1.0.0
     *
     * @param string $msg    → message error (Optional)
     * @param int    $error  → error code (Optional)
     * @param int    $status → HTTP response status code (Optional)
     */
    public function __construct(string $msg = '', int $error = 0, int $status = 0) {

        $this->message    = $msg;
        $this->code       = $error;
        $this->statusCode = $status;
    }
}