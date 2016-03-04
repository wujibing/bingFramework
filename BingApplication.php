<?php
/**
 * 
 */
namespace BingFramework;
/**
 * Application类
 * @author WuJiBing
 * @namespace BingFramework
 */
class BingApplication
{
    /**
     * 系统目录
     * @var string
     */
    protected $appDirectory;
    /**
     * 框架路径
     * @var string
     */
    protected $frameworkDirectory;
    
    protected $di;
    
    /**
     * 初始化项目
     * @param string $appDirectory
     */
    public function __construct($appDirectory)
    {
        $this->appDirectory = $appDirectory.DIRECTORY_SEPARATOR;
        $this->frameworkDirectory = __DIR__.DIRECTORY_SEPARATOR;
    }
}