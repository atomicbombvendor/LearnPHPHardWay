<?php
/**
 * Created by PhpStorm.
 * User: ZZ
 * Date: 2018/3/19
 * Time: 21:30
 */

$con = mysqli_connect("localhost", "root", "123456");
if(!$con){
    exit("could not connect: " . mysqli_error($con));
}else{
    echo "connect success";
}

?>