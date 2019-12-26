<?php
mb_internal_encoding("utf8");

$pdo = new PDO("mysql:dbname=yamakawa;host=localhost;","root","mysql");

$pdo ->exec("insert into 4each_keijiban (handlename,title,comments)
values('".$_POST['handlename']."','".$_POST['title']."','".$_POST['comments']."');");	

header("location:http://localhost/yamakawa課題/4each_keijiban/index.php");

?>