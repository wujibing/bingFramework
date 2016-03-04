<?php
namespace BingFramework\Core;
class BingException extends \Exception
{
    /**
     * ����
     * @var string
     */
    protected $message;
    /**
     * ���Բ���
     * @var array
     */
    protected $args;
    public function __construct($message,$args = null,$code=0)
    {
        $this->message = $message;
        $this->args = is_array($args)? $args :[$args];
    }
}