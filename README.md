# aliyun-php-sdk
[![Build Status](https://travis-ci.org/mobingilabs/aliyun-php-sdk.svg?branch=master)](https://travis-ci.org/mobingilabs/aliyun-php-sdk)

## Library
Alibaba Cloud SDK for PHP https://github.com/aliyun/aliyun-openapi-php-sdk

## Example

```php
use Aliyun\Ecs\EcsClient;
$this->ecs = new EcsClient()
    ->setProfile("cn-hangzhou", "<your accessKey>", "<your accessSecret>")->build();
$result = $this->ecs->describeRegion();
print_r($result);
```

## Authors && Contributors

- [Mobingi Labs](support@mobingi.com)
