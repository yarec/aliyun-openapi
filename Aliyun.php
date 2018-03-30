<?php

namespace Aliyun;

class Aliyun
{
    
    public static function setUp()
    {
        include_once __DIR__ . '/origin/aliyun-php-sdk-core/Regions/EndpointConfig.php';
        include_once __DIR__ . '/origin/aliyun-php-sdk-core/Regions/LocationService.php';

        define('ENABLE_HTTP_PROXY', false);
        define('HTTP_PROXY_IP', '127.0.0.1');
        define('HTTP_PROXY_PORT', '8888');
    }

}
