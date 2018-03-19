<?php
/**
 * Created by PhpStorm.
 * User: ZZ
 * Date: 2018/3/18
 * Time: 21:36
 */
$img = imagecreatetruecolor(500, 500);

$red = imagecolorallocate($img, 255, 0, 0);

$green = imagecolorallocate($img, 0, 255, 0);

$blue = imagecolorallocate($img, 0, 0, 255);

$pur = imagecolorallocate($img, 255, 0, 255);

$yellow = imagecolorallocate($img, 255, 255, 0);

//填充背景
imagefilledrectangle($img, 0, 0, 500, 500, $green);

imageline($img, 0, 0, 500, 500, $red);

imageline($img, 500, 0, 0, 500, $blue);
//画圆
imagefilledellipse($img, 250, 250, 200, 200, $yellow);

imagefilledrectangle($img, 250, 250, 500, 500, $pur);

imagefilledrectangle($img, 200, 200, 300, 300, $blue);



//保存图片，图片名为haha.jpg
imagejpeg($img, '../resource/haha.jpg');
?>