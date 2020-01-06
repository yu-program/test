<?php
mb_internal_encoding("utf8");

$pdo = new PDO("mysql:dbname=lesson1;host=localhost;","root","mysql");

$stmt = $pdo->prepare("insert into login_mypage (name,mail,password,picture,comments)values(?,?,?,?,?)");

//bindvalueメソッドで各カラムに何をinsertするか記述
$stmt->bindvalue(1,$_POST['name']);
$stmt->bindvalue(2,$_POST['mail']);
$stmt->bindvalue(3,$_POST['password']);	
$stmt->bindvalue(4,$_POST['picture']);
$stmt->bindvalue(5,$_POST['comments']);

//実行(insertを)
$stmt->execute();
//DBの切断
$pdo =NULL;

header('Location:after_register.html');
?>