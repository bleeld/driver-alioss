<?php

if (is_file(__DIR__ . '/../autoload.php')) {
    require_once __DIR__ . '/../autoload.php';
}
if (is_file(__DIR__ . '/../vendor/autoload.php')) {
    require_once __DIR__ . '/../vendor/autoload.php';
}

require ('./vendor/autoload.php');
require ('./vendor/bleeld/driver-alioss/autoload.php');


use AliOSS\OssClient;
use AliOSS\Core\OssException;

// 阿里云账号AccessKey拥有所有API的访问权限，风险很高。强烈建议您创建并使用RAM用户进行API访问或日常运维，请登录RAM控制台创建RAM用户。
$accessKeyId = "LTAI5t7gY23VWrbjXXvAfkyq";
$accessKeySecret = "29znErtpDkZ2TFoH2alWIgf6BKMxxh";
// yourEndpoint填写Bucket所在地域对应的Endpoint。以华东1（杭州）为例，Endpoint填写为https://oss-cn-hangzhou.aliyuncs.com。
$endpoint = "oss-cn-chengdu.aliyuncs.com";
// 填写Bucket名称，例如examplebucket。
$bucket = "sxhzjx-develop-lab";
// 填写Object完整路径，例如exampledir/exampleobject.txt。Object完整路径中不能包含Bucket名称。
// 填写待上传的字符串。
$object = "5.jpg";
$filePath = "D:\\examplefile.txt";



try{
    $ossClient = new OssClient($accessKeyId, $accessKeySecret, $endpoint);

    $ossClient->uploadFile($bucket, $object, $filePath);
} catch(OssException $e) {
    printf(__FUNCTION__ . ": FAILED\n");
    printf($e->getMessage() . "\n");
    return;
}
print(__FUNCTION__ . "OK" . "\n");



