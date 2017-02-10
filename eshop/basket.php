<?php
	// подключение библиотек
	require "inc/lib.inc.php";
	require "inc/config.inc.php";
    require "../include.php";
    $basket_items=myBasket();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Корзина пользователя</title>
</head>
<body>
	<h1>Ваша корзина</h1>
<?php

?>
<table border="1" cellpadding="5" cellspacing="0" width="100%">
<tr>
	<th>N п/п</th>
	<th>Название</th>
	<th>Автор</th>
	<th>Год издания</th>
	<th>Цена, руб.</th>
	<th>Количество</th>
	<th>Удалить</th>
</tr>
<?php
$i=0;
$price=0;
foreach ($basket_items as $item){
    ?>
    <tr>
        <td><?=$item['id']?></td>
        <td><?=$item['author']?></td>
        <td><?=$item['title']?></td>
        <td><?=$item['pubyear']?></td>
        <td><?=$item['price']?></td>
        <td><?=$item['quantity']?></td>
        <td><a href="/eshop/delete_from_basket.php?id=<?=$item['id']?>">Удалить</a></td>
    </tr>
    <?
    $i++;
    $price+=$item['price'];
}
?>
</table>

<p>Всего товаров в корзине <?=$i;?> на сумму: <?=$price;?> руб.</p>

<div align="center">
	<input type="button" value="Оформить заказ!"
                      onClick="location.href='/eshop/orderform.php'" />
</div>

</body>
</html>







