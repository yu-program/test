<?php

mb_internal_encoding("utf8");
//仮保存されたファイル名で画像を取得
//(仮保存されたディレクトリname属性の['picture']とファイル名['tmp_name'])
$temp_pic_name =$_FILES['picture']['tmp_name'];
$original_pic_name =$_FILES['picture']['name'];
$path_filename ='./image/'.$original_pic_name;
//下記、仮保存のファイル名をimageフォルダに、元のファイル名で移動させる。
move_uploaded_file($temp_pic_name,'./image/'.$original_pic_name);

?>
<!DOCTYPE HTML>
<html lang="ja">
	<head>
		<meta charset="UTF-8">
		<title>マイページ登録</title>
		<link rel="stylesheet" type="text/css" href="register_confirm.css">
	</head>
	<body>
		<header>
			<img src="4eachblog_logo.jpg">
			<div class="login"><a href="login.php">ログイン</a></div>
		</header>
		<main>
				<div class="confirm_contents">
					<h2>会員登録　確認</h2>
					<p>こちらの内容で登録しても宜しいでしょうか？</p>
					<div class="name">
						<?php echo "氏名:".$_POST['name'] ?>
					</div>
					<div class="mail">
						<?php echo "メールアドレス:".$_POST['mail'] ?>
					</div>
					<div class="password">
						<?php echo "パスワード:".$_POST['password'] ?>
					</div>
					<div class="pofile_picture">
						<?php echo "プロフィール画像:".$original_pic_name ?>
					</div>
					<div class="comments">
						<?php echo "コメント:".$_POST['comments'] ?>	
					</div>
					<div class="submit">
						<form action="register.php">						
							<input type="submit" class="return_button" value="戻って修正する">
						</form>
					</div>
					<div class="submit">	
						<form action="register_insert.php" method="post">
							<input type="submit" class="insert_botton" size="35" value="登録する">
							<input type="hidden" value="<?php echo $_POST['name'] ?>" name="name">
							<input type="hidden" value="<?php echo $_POST['mail'] ?>" name="mail">
							<input type="hidden" value="<?php echo $_POST['password'] ?>" name="password">
							<input type="hidden" value="<?php echo $path_filename ?>" name="picture">
							<input type="hidden" value="<?php echo $_POST['comments'] ?>" name="comments">
						</form>
					</div>
				</div>	
		</main>
		<footer>
			©2019 InterNous.inc. All right reserved
		</footer>
	</body>
</html>