<?php
/**
 * 
 */
namespace BingFramework;
/**
 * Application��
 * @author WuJiBing
 * @namespace BingFramework
 */
class BingApplication
{
    /**
     * ϵͳĿ¼
     * @var string
     */
    protected $appDirectory;
    /**
     * ���·��
     * @var string
     */
    protected $frameworkDirectory;
    
    protected $di;
    
    /**
     * ��ʼ����Ŀ
     * @param string $appDirectory
     */
    public function __construct($appDirectory)
    {
        $this->appDirectory = $appDirectory.DIRECTORY_SEPARATOR;
        $this->frameworkDirectory = __DIR__.DIRECTORY_SEPARATOR;
    }
}