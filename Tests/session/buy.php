<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
</head>
<body>
<?php
session_start();

$name = $_GET['name'];

$price = $_GET['price'];

$goods = $_SESSION['goods'];

if($name== $goods[$name]['name']){
    $_SESSION['totalPrice'] += $price;
    $goods[$name]['number'] += 1;
}else{
    $goods[$name]['name'] = $name;
    $goods[$name]['price'] = $price;
    $goods[$name]['number'] += 1;
    $_SESSION['totalPrice'] += $price;
}

$_SESSION['goods'] = $goods;
header('location: shoppingCart.php');

?>

</body>
</html>
