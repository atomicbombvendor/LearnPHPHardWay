<?php
/**
 * Created by PhpStorm.
 * User: eli9
 * Date: 3/13/2018
 * Time: 16:27
 */


//定义一条函数狗
function php_cn(){

    $foo = 5;

    $bar = 6;

    $result = $foo + $bar;
    //将$result的结果进行返回
    return $result;

}

//调用php_cn()这个函数，$foo和$bar相加的$result就会返回回来给到变量$piao
$piao = php_cn();

//输出$piao的结果，果真为11
echo $piao;

?>