<?php
	require "inc/lib.inc.php";
	require "inc/config.inc.php";
    require "../include.php";
    $time=date();
    $order_id=$basket["orderid"];
    $order='$_POST["name"]|$_POST["email"]|$_POST["phone"]|$_POST["address"]|$order_id|$time|';
    echo file_put_contents("admin/".ORDERS_LOG,$order,FILE_APPEND);
    saveOrder($time);
    ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Сохранение данных заказа</title>
</head>
<body>
	<p>Ваш заказ принят.</p>
	<p><a href="catalog.php">Вернуться в каталог товаров</a></p>
</body>
</html>