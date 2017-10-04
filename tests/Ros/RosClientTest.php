<?php
namespace AliyunTest\Ros;
use AliyunTest\AliyunTestBase;
use Aliyun\Ros\RosClient;

class RosClientTest extends AliyunTestBase {
    /**
     * @override
     * @return Aliyun\Ros\RosClient
     */
    protected function getTargetInstance() {
        return new RosClient();
    }

    /**
     * Test for testCreateStacks
     * @dataProvider getProviderCreateStacks
     * @param array $setter Request Value
     */
    public function testCreateStacks($setter) {
        // var_dump($setter);exit;
        $actual = $this->target->createStacks($setter);
        $this->assertInternalType("array", $actual);
    }

    /**
     * Test Provider for CreateStacks
     * @return array The list of Test Parameters
     */
    function getProviderCreateStacks() {
        return [
            'success' => [
                [ 'Name'            => 'aliyun-php-sdk-test',
                  'Template'        => [json_encode(self::ROS_TEMPLATE)],
                  'Parameters'      => json_encode([]),
                  'DisableRollback' => false,
                  'TimeoutMins'     => 10
                ]
            ],
        ];
    }
}
