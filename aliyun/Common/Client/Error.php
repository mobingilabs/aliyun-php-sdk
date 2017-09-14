<?php
namespace Aliyun\Common\Client;
use Aliyun\Common\Enum\Enum;
/**
 * Error set 'Aliyun Error'
 * @package Aliyun\Common\Client
 */
class Error extends Enum {
    /**
     * Argument of errormessage of aliyun
     * @var array
     */
    const MESSAGE = [
        'deleteSecurityGroup' => 'DependencyViolation There is still instance(s) in the specified security group.'
    ];
}
