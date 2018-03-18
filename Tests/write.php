<?php
/**
 * Created by PhpStorm.
 * User: ZZ
 * Date: 2018/3/18
 * Time: 15:00
 */

//append to open file
$fp = fopen('message.txt', 'a');

$time = time();

$username = trim($_POST['username']);

$content = trim($_POST['content']);

$string = $username.'#'.$content.'#'.$time.'&';

fwrite($fp, $string);

fclose($fp);

header('location:index,php');

?>