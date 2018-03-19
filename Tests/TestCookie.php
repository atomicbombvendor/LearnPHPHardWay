<?php
/**
 * Created by PhpStorm.
 * User: ZZ
 * Date: 2018/3/19
 * Time: 22:25
 */

//第一次登陆的时候，通过用户输入的信息来确认用户
if ( ( $_POST['username'] != null ) && ( $_POST['password'] != null ) ) {
 $userName = $_POST['username'];
 $password = $_POST['password'];
 //从db获取用户信息
 //PS：数据库连接信息改成自己的 分别为主机 数据库用户名 密码
 $conn = mysqli_connect('localhost','root','123456');

 mysqli_select_db($conn,'test');

 $sql = "SELECT * From test.`user` where username = '$userName' ";
 $res = mysqli_query($conn,$sql);
 $row = mysqli_fetch_assoc($res);
 if ($row['password'] == $password) {
 //密码验证通过，设置cookies，把用户名和密码保存在客户端
 setcookie('username',$userName,time()+60*60*24*30);//设置时效一个月,一个月后这个cookie失效
 setcookie('password',$password,time()+60*60*24*30);
 //最后跳转到登录后的欢迎页面
 header('Location: welcome.php' . "?username=$userName");
 }
}

//再次访问的时候通过cookie来识别用户
if ( ($_COOKIE['username'] != null) && ($_COOKIE['password'] != null) ) {
 $userName = $_COOKIE['username'];
 $password = $_COOKIE['password'];

 //从db获取用户信息
 //PS：数据库连接信息改成自己的 分别为主机 数据库用户名 密码
 $conn = mysqli_connect('localhost','root','root','test');
 $res = mysqli_query($conn,"select * from test.`user` where username = '$userName' ");
 $row = mysqli_fetch_assoc($res);
 if ($row['password'] == $password) {
 //验证通过后跳转到登录后的欢迎页面
 header('Location: welcome.php' . "?username=$userName");
 }
}

?>
