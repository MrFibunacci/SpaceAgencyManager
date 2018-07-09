<?php
/**
 * Klein (klein.php) - A fast & flexible router for PHP
 *
 * @author      Chris O'Hara <cohara87@gmail.com>
 * @author      Trevor Suarez (Rican7) (contributor and v2 refactorer)
 * @copyright   (c) Chris O'Hara
 * @link        https://github.com/klein/klein.php
 * @license     MIT
 */

namespace app\framework\Component\Route\Klein\Exceptions;

use UnexpectedValueException;

/**
 * ValidationException
 *
 * Exception used for Validation errors
 */
class ValidationException extends UnexpectedValueException implements KleinExceptionInterface
{
}
