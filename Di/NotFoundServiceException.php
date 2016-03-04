<?php
namespace BingFramework\Di;
/**
 * û���ҵ������쳣
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