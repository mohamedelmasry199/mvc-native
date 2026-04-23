<?php
namespace app\core\exceptions;

class ForbiddenException extends \Exception
{
    // public function __construct($message = "Access forbidden", $code = 403, $previous = null)
    // {
    //     parent::__construct($message, $code, $previous);
    // }
    protected $code = 403;
    protected $message = 'Access forbidden';
}
