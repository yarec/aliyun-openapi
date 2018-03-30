<?php

namespace Tests;

use Aliyun\Aliyun;
use Ecs\Request\V20140526\DescribeRegionsRequest;
use PHPUnit\Framework\TestCase;
use DefaultProfile;
use DefaultAcsClient;
use ServerException;

class SetupTest extends TestCase
{

    public function test_it_successfully_touch_the_api()
    {
        $this->expectException(ServerException::class);

        Aliyun::setUp();

        $client = new DefaultAcsClient(
            DefaultProfile::getProfile("cn-hangzhou", "your-app-key", "your-app-secret")
        );

        $client->getAcsResponse(new DescribeRegionsRequest());
    }

}
