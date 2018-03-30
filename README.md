# Aliyun-openapi SDK with Composer

## 安装

添加下述配置至```{project}/package.json```
```diff
    "repositories": [
+       {
+           "type": "vcs",
+           "url": "https://github.com/ddingchen/aliyun-openapi"
+       }
    ],
    "require": {
+       "ddingchen/aliyun-openapi": "dev-master"
    },
```

项目目录下执行下述命令进行安装
```
$ composer update ddingchen/aliyun-openapi
```

## 使用示例
```php
use Aliyun\Aliyun;
use Ecs\Request\V20140526\DescribeRegionsRequest;

// openapi的一些必要的全局设定（功能尚不完善）
Aliyun::setUp();

// 下面为示例业务代码，与官方SDK使用无差别
$profile = \DefaultProfile::getProfile("cn-hangzhou", "your-key", "your-secret");
$client = new \DefaultAcsClient($profile);
$request = new DescribeRegionsRequest();
$request->setMethod("GET");
$response = $client->getAcsResponse($request);
var_dump($response);
```
