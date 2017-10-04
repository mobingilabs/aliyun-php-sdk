<?php
namespace Aliyun\Ros;
use Aliyun\Common\Client\Client;
use Aliyun\Common\Client\Method;
use Ros\Request\V20150901 as Ros;
/**
 * RosClient Aliyun Ros Client to '/OpenSdk/aliyun-php-sdk-ros/Ros/Request/V20150901'
 * @package Aliyun\Ros
 */
class RosClient extends Client {
    /**
     * create Stacks
     * @param array $setter Setter is options eg.[Method => GET];
     * @param integer $time Time to delay execution
     * @return array result
     */
    function createStacks(array $setter = [], $time = 0) {
        $result = $this->executeClient(new Ros\CreateStacksRequest(), $setter, $time);
        return $result;
    }
}
