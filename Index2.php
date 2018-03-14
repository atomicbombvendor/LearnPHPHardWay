
/**
* Created by PhpStorm.
* User: ZZ
* Date: 2018/3/12
* Time: 20:57
*/

<form>
    <input type="text" name="num1">

    <select name="fh">
        <option value="jia"> + </option>
        <option value="jian"> - </option>
        <option value="c"> x </option>
        <option value="chu"> / </option>
        <option value="qy"> % </option>

    </select>

    <input type="text" name="num2">

    <input type="submit" value="运算" />


</form>

<?php

$num1 = $_GET['num1'];
$num2 = $_GET['num2'];
$fh = $_GET['fh'];

if(!is_numeric($num1) || !is_numeric($num2)){

    echo '请输入数值类型';
}

if($fh == 'jia'){
    echo $num1 . '+' . $num2 . '=' . ($num1+$num2);
}

if($fh=='jian'){
    echo $num1 . '-' . $num2 . '=' . ($num1-$num2);
}

if($fh=='c'){
    echo $num1 . 'x' . $num2 . '=' . ($num1*$num2);
}
if($fh=='chu'){
    echo $num1 . '/' . $num2 . '=' . ($num1/$num2);
}
if($fh=='qy'){
    echo $num1 . '%' . $num2 . '=' . ($num1%$num2);
}

?>