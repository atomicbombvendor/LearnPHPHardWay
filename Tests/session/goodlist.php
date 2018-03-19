<?php
/**
 * Created by PhpStorm.
 * User: ZZ
 * Date: 2018/3/19
 * Time: 22:42
 */

$goods = array();

$i = 0;

$conn = mysqli_connect('localhost', 'root', '123456', 'test');

$res = mysqli_query($conn, 'select * from `shop`');

while($row = mysqli_fetch_assoc($res)){
    $goods[$i]['id'] = $row['id'];
    $goods[$i]['name'] = $row['name'];
    $goods[$i]['price'] = $row['price'];
    $i++;
}

?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
</head>
<body>
<?php
//取出商品信息显示在页面上，并添加购买功能
foreach ($goods as $value){
    echo '商品名 ' . $value['name'] . ' 价格 ' . $value['price'];
    echo "<a href=buy.php?name=" . $value['name'] . '&price=' . $value['price'] .">购买</a>";
    echo '<br />';
}
?>
<a href="shoppingCart.php">查看购物车</a>
</body>
</html>

