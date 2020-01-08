<?php
session_start();

//ログイン状態なら、mypage.phpへリダイレクトする。
if(isset($_SESSION['id'])){
    header("Location:mypage.p");
}

?>

<!DOCTYPE HTML>
<html lang="ja">
	<head>
		<meta charset="UTF-8">
		<title>ログインエラー</title>
		<link rel="stylesheet" type="text/css" href="login_error.css">
	</head>
	<body>
		<header>
            <img src="4eachblog_logo.jpg">
			<div class="login"><a href="login.php">ログイン</a></div>
		</header>
		<main>
			<div class="form_contents">
                <form method="post" action="mypage.php">
                    <p><span>メールアドレスまたはパスワードが間違っています。</span></p>
					<div class="mail">
						<label>メールアドレス</label><br>
						<input type="text" class="formBox" size=40 name="mail" pattern="^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
					</div>
					<div class="password">
						<label>パスワード</label><br>
						<input type="password" name="password" class="formBox" id="password" size=40 pattern="^[a-zA-Z0-9]{6,}$" required>
					</div>
                    <div class="botton">
						<input type="submit" class="login_botton" size="35" value="ログイン">
                    </div>
                </form>
            </div>			
		</main>
		<footer>
			©2019 InterNous.inc. All right reserved
		</footer>			
	</body>
</html>