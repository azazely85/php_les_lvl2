<?php
include_once ('include.php');
$link=mysqli_connect('localhost','u_yardev','NDj13xpH','yardev');

//pre($link);

//$res=mysqli_query($link, 'SET NAMES "utf-8"');

$sql ="SELECT * FROM teachers";
$result = mysqli_query($link,$sql);
while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
    pre($row);
}

mysqli_close($link);