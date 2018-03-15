<?php
/**
 * Created by PhpStorm.
 * User: ZZ
 * Date: 2018/3/15
 * Time: 21:14
 */
//readfile("../resource/test.txt");

$test = file_get_contents("../resource/test.txt");
//echo $test;

$filearray = explode("\n", $test);

while(list($key, $value) = each($filearray)){
    ++$key;
    $val = trim($value);
    print 'Line'. $key . ':'. $val. '\n';
}


//设置打开的目录是D盘
$dir = "d:/";

//判断是否是文件夹，是文件夹
if (is_dir($dir)) {
    if ($dh = opendir($dir)) {

        //读取一次向后移动一次文件夹指针
        echo readdir($dh) . '<br />';
        echo readdir($dh) . '<br />';
        echo readdir($dh) . '<br />';
        echo readdir($dh) . '<br />';

        //读取到最后返回false

        //关闭文件夹资源
        closedir($dh);
    }
}

echo "\n";

$path_parts = pathinfo('d:/www/index.inc.php');

echo '文件目录名：'.$path_parts['dirname']."<br />";
echo '文件全名：'.$path_parts['basename']."<br />";
echo '文件扩展名：'.$path_parts['extension']."<br />";
echo '不包含扩展的文件名：'.$path_parts['filename']."<br />";

echo "1: ".basename("d:/www/index.d", ".d").PHP_EOL;
echo "2: ".basename("d:/www/index.php").PHP_EOL;
echo "3: ".basename("d:/www/passwd").PHP_EOL;

echo dirname(__FILE__).PHP_EOL;

$url = 'http://username:password@hostname:9090/path?arg=value#anchor';

var_dump(parse_url($url));

//定义一个关联数组
$data = [
    'username'=>'php',
    'area'=>'hubei'
];

//生成query内容
echo http_build_query($data);
?>