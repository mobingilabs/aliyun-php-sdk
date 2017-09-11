<?php
namespace Aliyun\Rds;
use Aliyun\Common\Client\Client;
use Aliyun\Common\Client\Method;
use Rds\Request\V20140815 as Rds;
/**
 * RdsClient Aliyun Rds Client to '/OpenSdk/aliyun-php-sdk-slb/Rds/Request/V20140815'
 * @package Aliyun\Rds
 */
class RdsClient extends Client {
    /**
     * create DBInstance
     * @param array $setter Setter is options eg.[Method => GET];
     * @param integer $time Time to delay execution
     * @return array result
     */
     function createDBInstance(array $setter = [], $time = 0) {
        $result = $this->executeClient(new Rds\CreateDBInstanceRequest(), $setter+Method::POST, $time);
        return $result;
    }
}