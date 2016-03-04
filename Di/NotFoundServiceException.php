<?php
namespace BingFramework\Di;
/**
 * 没有找到服务异常
 * @author WuJiBing
 *
 */
class NotFoundServiceException extends \Exception
{
    public function __construct($serviceName = '')
    {
        parent::__construct('not found service name %s',$serviceName,10001);
    }
}