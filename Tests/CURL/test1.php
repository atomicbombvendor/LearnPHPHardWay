<?php
/**
 * Created by PhpStorm.
 * User: eli9
 * Date: 3/20/2018
 * Time: 17:40
 */
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "http://www.php.cn");

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);//  	TRUE 将curl_exec()获取的信息以字符串返回，而不是直接输出。

curl_setopt($ch, CURLOPT_HEADER, 0);//启用时会将头文件的信息作为数据流输出。

$output = curl_exec($ch);

curl_close($ch);

print_r($output);


?>