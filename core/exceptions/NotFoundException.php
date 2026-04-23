<?php
namespace app\core\exceptions;
class NotFoundException extends \Exception
{
    // public function __construct($message = "Page not found", $code = 404, $previous = null)
    // {
    //     parent::__construct($message, $code, $previous);
    // }
    protected $code = 404;
    protected $message = 'Page not found';
}
