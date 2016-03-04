<?php
namespace BingFramework\Core;
class BingException extends \Exception
{
    /**
     * ÓïÑÔ
     * @var string
     */
    protected $message;
    /**
     * ÓïÑÔ²ÎÊý
     * @var array
     */
    protected $args;
    public function __construct($message,$args = null,$code=0)
    {
        $this->message = $message;
        $this->args = is_array($args)? $args :[$args];
    }
}