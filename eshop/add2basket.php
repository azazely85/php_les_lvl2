<?php
	// подключение библиотек
	require "inc/lib.inc.php";
	require "inc/config.inc.php";
    if($_GET["id"]) {
        $link=mysqli_connect(DB_HOST,DB_LOGIN,DB_PASSWORD,DB_NAME);
        $id = mysqli_real_escape_string($link, $_GET["id"]);
        mysqli_close($link);
        add2Basket($id);
        header("Location: catalog.php");
    }