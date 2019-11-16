<?php
/**
 * Created by PhpStorm.
 * User: 老王专用
 * Date: 2019/9/11
 * Time: 19:44
 */

require "../vendor/autoload.php";

use laowang\UploadFile;

print_r(is_dir('./lolo/'));

rmdir('./lolo/');

print_r(is_dir('./lolo/'));
