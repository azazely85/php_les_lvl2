<?php
setlocale(LC_ALL, 'ru_RU.UTF-8');
/* Основные настройки */
define("DB_HOST","localhost",true);
define("DB_LOGIN","u_yardev",true);
define("DB_PASSWORD","NDj13xpH",true);
define("DB_NAME","yardev",true);
define("ORDERS_LOG","orders.log",true);
$basket=array();
$count=0;
basketInit();
