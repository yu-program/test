<?php
mb_internal_encoding("utf8");

//セッションスタート
session_start();

//DBに接続する（try,catch文も入れておく）
try{
    $pdo = new PDO("mysql:dbname=yamakawa;host=localhost;","root","mysql");
}catch(PDOException $e){
    die("<p>申し訳ございません。現在サーバーが混みあっており一時的にアクセスが出来ません。<br>
    しばらくしてから再度ログインをしてください。</p><a href='https://localhost/login_mypage/login.php'>ログイン画面へ</a>"
       );
}

//preparedステートメントの用意。(update文)　bindValueメソッドでパラメータのセット。
$stmt =$pdo->prepare("update login_mypage set name =?,mail =?,password =?,comments =? where id =?");

//bindValueメソッドでパラメータをセット　bindValueの1,2,3,上のupdate文に紐づいている
$stmt->bindValue(1,$_POST['name']);
$stmt->bindValue(2,$_POST['mail']);
$stmt->bindValue(3,$_POST['password']);
$stmt->bindValue(4,$_POST['comments']);
$stmt->bindValue(5,$_SESSION['id']);

//クエリ実行
$stmt->execute();

//preparedステートメントの用意（select文:上書きされた値を取得する）bindValueメソッドでパラメータのセット。

$stmt =$pdo->prepare("select * from login_mypage where id =?");

//bindValueメソッドでパラメータをセット
$stmt->bindValue(1,$_SESSION['id']);

//クエリ実行
$stmt->execute();

//while・fetch文でデータを取得し、sessionに代入。
while($row =$stmt->fetch()){
    $_SESSION['id'] = $row['id'];//←もともとsessionからパラメータセットしたから$row['id']に値は入っていない？
    $_SESSION['name'] = $row['name'];
    $_SESSION['mail'] = $row['mail'];
    $_SESSION['password'] = $row['password'];
    $_SESSION['picture'] = $row['picture'];
    $_SESSION['comments'] = $row['comments'];
}

//mypage.phpへリダイレクト ←$_SESSION['id']があったら(編集した値がDBに登録され、selectできたら)という解釈であっているか？ 
if(isset($_SESSION['id'])){
    header("location:mypage.php");
}

//最後にデータベースとの接続を切断する。
$pdo = NULL;

?>