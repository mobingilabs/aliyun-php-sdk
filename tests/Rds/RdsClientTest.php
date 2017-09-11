<?php
namespace AliyunTest\Rds;
use AliyunTest\AliyunTestBase;
use Aliyun\Rds\RdsClient;

class RdsClientTest extends AliyunTestBase {
    /**
     * @override
     * @return Aliyun\Rds\RdsClient
     */
    protected function getTargetInstance() {
        return new RdsClient();
    }
    /**
     * Test for testCreateDBInstance
     * @dataProvider getProviderCreateDBInstance
     */
    public function testCreateDBInstance($setter) {
        $actual = $this->target->createDBInstance($setter);
        $this->assertInternalType("array", $actual);
        $this->assertArrayHasKey("DBInstanceId", $actual);
    }

    /**
     * Test Provider for CreateDBInsntace
     * @return array The list of Test Parameters
     */
     function getProviderCreateDBInstance() {
        
        return [
            'success' => [
                ['Engine' => 'MySQL', 'EngineVersion' => '5.6', 'DBInstanceClass' => 'rds.mysql.t1.small', 'DBInstanceStorage' => 5, 'DBInstanceNetType' => 'intranet', 
                'SecurityIPList' => '0.0.0.0/0', 'PayType' => 'Postpaid', 'VPCId' => 'vpc', 'VSwitchId' => 'vsw']
            ],
        ];
    }
}