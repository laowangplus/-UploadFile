<?php
/**
 * Created by PhpStorm.
 * User: 老王专用
 * Date: 2019/9/11
 * Time: 19:44
 */
require '../vendor/autoload.php';

use laowang\UploadFile;

//var_dump($_FILES);
//die();

$upload = new UploadFile([
    'uploadReplace' => true,
    'thumbPath' => './upload/thumb/',
    'thumbGrade' => 0.5,
]);
$upload->maxSize       = 1*1024*1024;    // 默认为-1，不限制上传大小
$upload->savePath      = './upload/';    // 上传根目录
$upload->saveRule      = 'md5';       // 上传文件的文件名保存规则
$upload->uploadReplace = true;           // 如果存在同名文件是否进行覆盖
$upload->autoSub       = true;           // 上传子目录开启
$upload->subType       = 'date';         // 上传子目录命名规则
$upload->allowExts     = ['jpg', 'png']; // 允许类型

if ($upload->upload()) {
    var_dump($upload->getUploadFileInfo());
} else {
    var_dump($upload->getErrorMsg());
}