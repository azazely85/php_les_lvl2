<?php
	// подключение библиотек
	require "secure/session.inc.php";
	require "../inc/lib.inc.php";
	require "../inc/config.inc.php";
if($_POST["title"] && $_POST["author"] && $_POST["pubyear"] && $_POST["price"]) {
    $link=mysqli_connect(DB_HOST,DB_LOGIN,DB_PASSWORD,DB_NAME);
    $title = mysqli_real_escape_string($link, $_POST["title"]);
    $author = mysqli_real_escape_string($link, $_POST["author"]);
    $pubyear = mysqli_real_escape_string($link, $_POST["pubyear"]);
    $price = mysqli_real_escape_string($link, $_POST["price"]);
    mysqli_close($link);
    if(!addItemToCatalog($title, $author,$pubyear,$price)){
        echo 'Произошла ошибка при добавлении товара в каталог <a href=\'/eshop/admin/add2cat.php\'>вернуться</a>';
    }else {
        header("Location: add2cat.php");
        exit;
    }
}else{
    echo "Не все поля заполнены <a href='/eshop/admin/add2cat.php'>вернуться</a>" ;
}