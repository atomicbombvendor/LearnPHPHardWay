<?php
/**
 * Created by PhpStorm.
 * User: ZZ
 * Date: 2018/3/18
 * Time: 15:04
 */

//set time zone
date_default_timezone_set('PRC');

//content get from file
@$string = file_get_contents('../resource/message.txt');

//if $string is not null.
if(!empty($string)){
    $string = rtrim($string, '&^');
    $arr = explode('#', $string);
    list($username, $content, $time) = $arr;
    echo 'UserName is' . $username . '<br/>Content is'. $content .'<br/>Time is '. date('Y-m-d H:i:s', $time);
    echo '<hr />';

}
?>

<h1>基于文件的留言本演示</h1>
<form action="write.php" method="post">
    用户名：<input type="text" name="username"/><br/>
    留言内容：<textarea name="content"></textarea><br/>
    <input type="submit" value="提交"/>
</form>