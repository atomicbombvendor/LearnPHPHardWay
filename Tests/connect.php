<?php
/**
 * Created by PhpStorm.
 * User: ZZ
 * Date: 2018/3/19
 * Time: 21:44
 */
if(trim($_POST['password']) != trim($_POST['repassword'])){
    exit("两次的密码不一致，请返回上一页");
}

$username = trim($_POST['username']);

$password = trim($_POST['password']);

$time = time();

$ip = $_SERVER['REMOTE_ADDR'];

$conn = mysqli_connect('localhost', 'root', '123456');

if(mysqli_error($conn)){
    echo mysqli_error($conn);
    exit;
}

mysqli_select_db($conn, 'test');

mysqli_set_charset($conn, 'utf-8');

$sql = "insert into user(username,password,createtime,createip) values('" . $username . "','" . $password . "','" . $time . "','" . $ip . "')";

$result = mysqli_query($conn, $sql);

if($result){
    echo "成功</br>";
    echo '当前用户的Id为 '.mysqli_insert_id($conn);
}else{
    echo "失败<br/>";
}

mysqli_close($conn);

?>