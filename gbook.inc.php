<?php
/* Основные настройки */
include_once ('include.php');
setlocale(LC_ALL, 'ru_RU.UTF-8');
/* Основные настройки */
define("DB_HOST","localhost",true);
define("DB_LOGIN","u_yardev",true);
define("DB_PASSWORD","NDj13xpH",true);
define("DB_NAME","yardev",true);
$link=mysqli_connect(DB_HOST,DB_LOGIN,DB_PASSWORD,DB_NAME);
/* Сохранение записи в БД */
//pre($_POST);
if($_POST["name"] && $_POST["email"] && $_POST["msg"]){
    $name=mysqli_real_escape_string($link,$_POST["name"]);
    $email=mysqli_real_escape_string($link,$_POST["email"]);
    $msg=mysqli_real_escape_string($link,$_POST["msg"]);

/* Сохранение записи в БД */
    $sql="INSERT INTO msgs (name, email, msg) VALUES ('$name','$email', '$msg')";
    $result = mysqli_query($link,$sql);
}


/* Удаление записи из БД */
if($_GET["del"]){
    $del= $_GET["del"];
    /* Сохранение записи в БД */
    $sql="DELETE FROM msgs WHERE id = $del";
    $result = mysqli_query($link,$sql);
}
$sql="SELECT id, name, email, msg, UNIX_TIMESTAMP(datetime) as dt FROM msgs ORDER BY id DESC";
$result = mysqli_query($link,$sql);
while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
    //pre($row);
    ?>
    <div style="width: 500px">
        <p>
            <a href="<?=$row['email'];?>"><?=$row['name'];?></a>
            <?=strftime('%d %B %G', $row['dt']);?> в  <?=date("G:i",$row['dt'])?>
            написал<br /><?=$row['msg'];?>
        </p>
        <p align="right">
            <a href="/gbook.inc.php?id=gbook&del=<?=$row['id'];?>">
                Удалить</a>
        </p>
    </div>
    <?
}
mysqli_close($link);
/* Удаление записи из БД */
?>
<h3>Оставьте запись в нашей Гостевой книге</h3>

<form method="post" action="<?= $_SERVER['REQUEST_URI']?>">
Имя: <br /><input type="text" name="name" /><br />
Email: <br /><input type="text" name="email" /><br />
Сообщение: <br /><textarea name="msg"></textarea><br />

<br />

<input type="submit" value="Отправить!" />

</form>
<?php
/* Вывод записей из БД */

/* Вывод записей из БД */
?>