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
