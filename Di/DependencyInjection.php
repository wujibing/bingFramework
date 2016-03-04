<?php
namespace BingFramework\Di;

class DependencyInjection
{
    /**
     * ������Ϣ����
     * [
     *  'id'=>[
     *      'define' => '�����class����callback',
     *      'interface'=>'����Ľӿڣ�����ֵ���ڵ�ʱ�򣬱���ʵ�ָýӿ�',
     *      'instance' => 'ʵ�����Ķ���',
     *      'share' => bool �Ƿ������
     *     ]
     * ]
     * @var array
     */
    protected $servers = [];
    /**
     * ���÷���
     * @param string $id ����ID
     * @param mixed $define ������
     * @param string $interface ����ӿ�
     * @param string $share �Ƿ���
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
     * ��ȡʵ��������
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
     * ��ȡService��Ϣ
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