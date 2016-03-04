<?php
namespace BingFramework\Di;
interface IDependencyInjection
{
    /**
     * ע��
     * @param string $id
     * @param mixed $define
     * @param string $interface
     * @param bool $share
     */
    public function register($id,$define,$interface,$share);

    /**
     * ע��һ������
     * @param string $id
     * @param mixed $define
     * @param string $interface
     */
    public function registerService($id,$define,$interface='Bing\Service\IServiceProvider');

    /**
     * delete a service
     * @param $id
     * @return void
     */
    public function delete($id);

    /**
     * ��ȡʵ��
     * @param $id
     * @param mixed $parameters
     * @return mixed
     */
    public function get($id,$parameters=null);

    /**
     * ��ȡ����
     * @param $name
     * @return \Bing\DI\Service\IService
     */
    public function getService($id);
    /**
     * @param IService $service
     * @param null $parameters
     * @return mixed|null
     * @throws NotLoadDefinitionException
     */
    public function buildInstance(IService $service,$parameters = null);

    /**
     * get
     * @param $name
     * @return mixed
     */
    public function __get($name);
}