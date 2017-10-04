<?php
namespace AliyunTest;
use PHPUnit\Framework\TestCase;
/**
 * Test base class for aliyun
 */
abstract class AliyunTestBase extends TestCase {
    /**
     * The region for test
     */
    const TEST_REGION = "ap-northeast-1";

    /**
     * The zone for test
     */
    const TEST_ZONE = "ap-northeast-1a";

    /**
     * The id for test
     */
    const TEST_ID = "aliyun-sdk-test";

    /**
     * The imageid for test
     */
    const TEST_IMAGE_ID = "centos_7_03_64_40G_alibase_20170710.vhd";

    /**
     * The instancetype for test
     */
    const TEST_INSTANCE_TYPE = "ecs.n4.small";

    const ROS_TEMPLATE =
        [
          "ROSTemplateFormatVersion" => "2015-09-01",
          "Description" => "A simple ECS instance, including a security group, users only need to specify imageId",
          "Parameters" => [
              "ImageId" => [
                  "Type"        => "String",
                  "Default"     => "centos_7_03_64_40G_alibase_20170710.vhd",
                  "Description" => "Image file ID, which represents the mirror resource selected when the instance was started, <a href='#/product/ap-northeast-1/list/imageList' target='_blank'> view the mirror resource </a>"
              ],
              "InstanceType" => [
                  "Type"        => "String",
                  "Description" => "Instance of the resource specification",
                  "Default"     => "ecs.n4.small",
                  "AllowedValues" => [
                      "ecs.n4.small",
                      "ecs.n4.large",
                      "ecs.n4.xlarge",
                      "ecs.mn4.small",
                      "ecs.mn4.large",
                      "ecs.mn4.xlarge",
                      "ecs.xn4.small",
                      "ecs.e4.large"
                   ]
              ]
          ],
          "Resources" => [
              "WebServer" => [
                  "Type" => "ALIYUN::ECS::Instance",
                  "Properties" => [
                      "ImageId"         => ["Ref" => "ImageId"],
                      "InstanceType"    => ["Ref" => "InstanceType"],
                      "SecurityGroupId" => ["Ref" => "SecurityGroup"]
                 ]
              ],
              "SecurityGroup" => [
                  "Type" => "ALIYUN::ECS::SecurityGroup",
               ]
          ],
          "Outputs" => [
              "InstanceId" => [
                  "Value" => ["Fn::GetAtt" => ["WebServer","InstanceId"]]
              ],
              "PublicIp" => [
                  "Value" => ["Fn::GetAtt" => ["WebServer","PublicIp"]]
              ],
              "SecurityGroupId" => [
                  "Value" => ["Fn::GetAtt" => ["SecurityGroup","SecurityGroupId"]]
              ]
          ]
        ];

    /**
     * Instance object of test target class
     */
    protected $target;

    public function setUp() {
        parent::setUp();
        $this->target = $this->getTargetInstance();
        $profile = ['region' => self::TEST_REGION, 'key' => $_SERVER['TEST_ALIYUN_ACCESS'], 'secret' => $_SERVER['TEST_ALIYUN_SECRET']];
        $this->target->setProfile($profile)->build();
    }

    /**
     * Get instance object of test target class
     * @return test target class
     */
    abstract protected function getTargetInstance();

}
