<?php
namespace BingFramework\Di;

class DependencyInjection
{
    /**
     * 服务信息数组
     * [
     *  'id'=>[
     *      'define' => '定义的class或者callback',
     *      'interface'=>'定义的接口，当此值存在到时候，必须实现该接口',
     *      'instance' => '实例化的对象',
     *      'share' => bool 是否共享对象
     *     ]
     * ]
     * @var array
     */
    protected $servers = [];
    /**
     * 设置服务
     * @param string $id 服务ID
     * @param mixed $define 服务定义
     * @param string $interface 服务接口
     * @param string $share 是否共享
     * @return \BingFramework\Di\DependencyInjection
     */
    public function set($id,$define,$interface='',$share=true)
    {
        $this->servers[$id] = [
            'define' => $define,
            'interface' => $interface,
            'share' => $share
        ];
        return $this;
    }
    /**
     * 获取实例化对象
     * @param string $id
     * @return mixed
     */
    public function get($id)
    {
        $server = $this->getService($id);
        if($server['share'] && $server['instance'])
        {
            return $server['instance'];
        } else 
        {
            return $this->createInstance($id);
        }
    }
    /**
     * 
     * @param string $id
     * @return mixed
     */
    public function __get($id)
    {
        return $this->get($id);
    }
    /**
     * 获取Service信息
     * @param string $id
     * @throws NotFoundServiceException
     * @return array
     */
    protected function getService($id)
    {
        if(!isset($this->servers[$id]))
        {
            throw new NotFoundServiceException($id);
        }
        return $this->servers[$id];
    }
}