<?php
	// подключение библиотек
	require "inc/lib.inc.php";
	require "inc/config.inc.php";
	//$id=is_numeric($_GET["id"]);
    if(is_numeric($_GET["id"])){
        deleteItemFromBasket($_GET["id"]);
    }
    header("Location: basket.php");
