<!DOCTYPE HTML>
<html lang="ja">
	<head>
		<meta charset="UTF-8">
		<title>ログイン</title>
		<link rel="stylesheet" type="text/css" href="login.css">
	</head>
	<body>
		<header>
			<img src="4eachblog_logo.jpg">
			<div class="login"><a href="login.php">ログイン</a></div>
		</header>
		<main>
			<form method="post" action="mypage.php">
				<div class="form_contents">
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
				</div>
			</form>
		</main>
		<footer>
			©2019 InterNous.inc. All right reserved
		</footer>			
	</body>
</html>