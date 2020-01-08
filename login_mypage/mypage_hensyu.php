<?php
mb_internal_encoding("utf8");

//セッションスタート
session_start();

if(empty($_POST['from_mypage'])){
    header("Location:login_error.php");
}

?>

<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>マイページ</title>
        <link rel="stylesheet" type="text/css" href="mypage_hensyu.css">
    </head>
    <body>
        		<header>
			<img src="4eachblog_logo.jpg">
			<div class="login"><a href=log_out.php>ログアウト</a></div>
		</header>
		<main>
            <div class="confirm_contents">
				<h2>会員情報</h2>
				<div class="hello">
				    <?php echo "こんにちは!　".$_SESSION['name']."さん"; ?>
				</div>
                <div class="profile_pic">
                    <img src="<?php echo $_SESSION['picture']; ?>">
                </div>
                <form method ="post" action ="mypage_update.php">
                    <div class ="personal_info">
                        <div class ="name">
                            氏名：<input type =text name ="name" class ="info" value="<?php echo $_SESSION['name']; ?>">
                        </div>
                        <div class ="mail">
                            メール：<input type =text name ="mail" class ="info" value="<?php echo $_SESSION['mail']; ?>">
                        </div>
                        <div class ="password">
                            パスワード：<input type =text name ="password" class ="info" value="<?php echo $_SESSION['password']; ?>">
                        </div>
                    </div>
                    <div class="comments">
                        <textarea name="comments" rows="5" cols=120><?php echo $_SESSION['comments']; ?></textarea>
                    </div>
                    <div class="submit">
				        <input type="submit" class="insert_botton" size="40" value="この内容に変更する">
                    </div>
                </form>
            </div>
		</main>
		<footer>
			©2019 InterNous.inc. All right reserved
		</footer>   
    </body>
</html>