<?php
namespace Aliyun\Ess;
use Aliyun\Common\Client\Client;
use Aliyun\Common\Client\Method;
use Ess\Request\V20140828 as Ess;
/**
 * EssClient Aliyun Ess Client to '/OpenSdk/aliyun-php-sdk-ess/Ess/Request/V20140828'
 * @package Aliyun\Ess
 */
class EssClient extends Client {
    /**
     * create ScalingGroup
     * @param array $setter Setter is options eg.[Method => GET];
     * @param integer $time Time to delay execution
     * @return array result
     */
    function createScalingGroup(array $setter = [], $time = 0) {
        $result = $this->executeClient(new Ess\CreateScalingGroupRequest(), $setter+Method::POST, $time);
        return $result;
    }

    /**
     * describe ScalingGroup
     * @param array $setter Setter is options eg.[Method => GET];
     * @param integer $time Time to delay execution
     * @return array result
     */
    function describeScalingGroup(array $setter = [], $time = 0) {
        $result = $this->executeClient(new Ess\DescribeScalingGroupsRequest(), $setter+Method::GET, $time);
        return $result;
    }

    /**
     * create ScalingConfiguration
     * @param array $setter Setter is options eg.[Method => GET];
     * @param integer $time Time to delay execution
     * @return array result
     */
    function createScalingConfiguration(array $setter = [], $time = 0) {
        $result = $this->executeClient(new Ess\CreateScalingConfigurationRequest(), $setter+Method::POST, $time);
        return $result;
    }

    /**
     * enable ScalingGroup
     * @param array $setter Setter is options eg.[Method => GET];
     * @param integer $time Time to delay execution
     * @return array result
     */
    function enableScalingGroup(array $setter = [], $time = 0) {
        $result = $this->executeClient(new Ess\EnableScalingGroupRequest(), $setter+Method::POST, $time);
        return $result;
    }

    /**
     * create ScalingRule
     * @param array $setter Setter is options eg.[Method => GET];
     * @param integer $time Time to delay execution
     * @return array result
     */
    function createScalingRule(array $setter = [], $time = 0) {
        $result = $this->executeClient(new Ess\CreateScalingRuleRequest(), $setter+Method::POST, $time);
        return $result;
    }

    /**
     * describe ScalingConfigrations
     * @param array $setter Setter is options eg.[Method => GET];
     * @param integer $time Time to delay execution
     * @return array result
     */
    function describeScalingConfigrations(array $setter = [], $time = 0) {
        $result = $this->executeClient(new Ess\DescribeScalingConfigurationsRequest(), $setter+Method::GET, $time);
        return $result;
    }

    /**
     * describe ScalingRule
     * @param array $setter Setter is options eg.[Method => GET];
     * @param integer $time Time to delay execution
     * @return array result
     */
    function describeScalingRule(array $setter = [], $time = 0) {
        $result = $this->executeClient(new Ess\DescribeScalingRulesRequest(), $setter+Method::GET, $time);
        return $result;
    }

    /**
     * describe ScalingActivity
     * @param array $setter Setter is options eg.[Method => GET];
     * @param integer $time Time to delay execution
     * @return array result
     */
    function describeScalingActivity(array $setter = [], $time = 0) {
        $result = $this->executeClient(new Ess\DescribeScalingActivitiesRequest(), $setter+Method::GET, $time);
        return $result;
    }

    /**
     * attach Instance
     * @param array $setter Setter is options eg.[Method => GET];
     * @param integer $time Time to delay execution
     * @return array result
     */
    function attachInstance(array $setter = [], $time = 0) {
        $result = $this->executeClient(new Ess\AttachInstancesRequest(), $setter+Method::POST, $time);
        return $result;
    }

}
