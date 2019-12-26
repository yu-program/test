<!DOCTYPE HTML>
<html lang="ja">
	<head>
		<meta charset="UTF-8">
		<title>マイページ登録</title>
		<link rel="stylesheet" type="text/css" href="register.css">
	</head>
	<body>
		<header>
			<img src="4eachblog_logo.jpg">
			<div class="login"><a href="login.php">ログイン</a></div>
		</header>
		<main>
			<form method="post" action="register_confirm.php" enctype="multipart/form-data">
				<div class="form_contents">
					<h2>会員登録</h2>
					<div class="name">
						<div class="hissu">必須</div><label>氏名</label><br>
						<input type="text" class="formBox" size=40 name="name" required>
					</div>
					<div class="mail">
						<div class="hissu">必須</div><label>メールアドレス</label><br>
						<input type="text" class="formBox" size=40 name="mail" pattern="^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
					</div>
					<div class="password">
						<div class="hissu">必須</div><label>パスワード</label><br>
						<input type="password" name="password" class="formBox" id="password" size=40 pattern="^[a-zA-Z0-9]{6,}$" required>
					</div>
					<div class="password">
						<div class="hissu">必須</div><label>パスワード確認</label><br>
						<input type="password"  name="confirm_password" class="formBox" id="confirm" oninput="ConfirmPassword(this)">
					</div>
					<div class="pofile_picture">
						<label>プロフィール画像</label><br>
						<input type="hidden" name="max_file_size" value="1000000" />
						<input type ="file" size=40 name="picture">
					</div>
					<div class="comments">
						<label>コメント</label><br>
						<textarea name="comments" rows="5" cols=45 ></textarea>	
					</div>
					<div class="toroku">
						<input type="submit" class="submit_botton" size="35" value="登録する">
					</div>
				</div>
			</form>
		</main>
		<footer>
			©2019 InterNous.inc. All right reserved
		</footer>
		
		<script>
			function ConfirmPassword(confirm){
				var input1 =password.value;
				var input2 =confirm.value;
					
				if(input1 != input2){
					confirm.setCustomVaildity("パスワードが一致しません。");
				}else{
					confirm.setCustomVaildity("");
				}
			}
		</script>
			
	</body>
</html>