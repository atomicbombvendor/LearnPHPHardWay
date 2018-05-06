<?php
/**
 * Created by PhpStorm.
 * User: eli9
 * Date: 3/20/2018
 * Time: 17:47
 */
$content = get("http://www.xmtnews.com/events");
preg_match('/<section class="ov">(.*?)<div class="hr-10"><\/div>/', $content, $match);
$area = $match[1];

preg_match_all('/<h3><a href="(.*?)" title=".*?" class="headers" target="_blank">(.*?)<\/a><\/h3>/', $area, $find);
var_dump($find);


function get($url){
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, $url);

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    curl_setopt($ch, CURLOPT_HEADER, 0);

    curl_setopt($ch, CURLOPT_TIMEOUT, 10);

    $output = curl_exec($ch);

    curl_close($ch);

    return $output;
}

?>

