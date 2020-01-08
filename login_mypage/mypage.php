<?php
mb_internal_encoding("utf8");
session_start();

//$_SESSION['id']が空、つまり一度もログインしていない状態のときにtryの処理をするということ。
if(empty($_SESSION['id'])){
    //try catch文で例外処理(エラーだった時)の処理を記述する。(DBに接続できないなら"エラーメッセージを表示する")
    try{
        $pdo = new PDO("mysql:dbname=yamakawa;host=localhost;","root","mysql");
    }catch(PDOException $e){
        //catch()には起こりうる例外の種類、それを入れる変数名(大体$e)を記述する。
        //dieはメッセージを表示し、スクリプトを終了させる。エラーメッセージ→ログイン画面へ
        die("<p>申し訳ございません。現在サーバーが混みあっており一時的にアクセスが出来ません。<br>
        しばらくしてから再度ログインをしてください。</p><a href='https://localhost/login_mypage/login.php'>ログイン画面へ</a>"
        );
    }

    //preparedステートメントでSQL文を記述する。DBの値とpostデータの照合をする(select文とwhere句で)
    $stmt = $pdo->prepare("select * from login_mypage where mail = ? && password = ?");

    //bindValueメソッドでパラメータをセット
    $stmt->bindValue(1,$_POST['mail']);
    $stmt->bindValue(2,$_POST['password']);

    //クエリを実行
    $stmt->execute();

    //照合ができたら、DBから値を取得し、sessionにいれる。
    while($row =$stmt->fetch()){
        $_SESSION['id'] = $row['id'];
        $_SESSION['name'] = $row['name'];
        $_SESSION['mail'] = $row['mail'];
        $_SESSION['password'] = $row['password'];
        $_SESSION['picture'] = $row['picture'];
        $_SESSION['comments'] = $row['comments'];  
    }

    //sessionがない(=DBから値を取得できない)かをempty(値が入っていないことがture)で判定し、リダイレクト処理する(エラー画面へ)
    if(empty($_SESSION['id'])){
        header("location:login_error.php");
    }
}

//最後にデータベースとの接続を切断する。
$pdo = NULL;

?>

<!DOCTYPE HTML>
<html lang="ja">
    <head>
        <meta charset ="UTF-8">
        <title>マイページ</title>
        <link rel ="stylesheet" type ="text/css" href="mypage.css">
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
                    <div class="personal_info">
					   <div class="name">
				            <?php echo "氏名：".$_SESSION['name']; ?>
                        </div>
                        <div class="mail">
                            <?php echo "メール：".$_SESSION['mail']; ?>
                        </div>
                        <div class="password">
                            <?php echo "パスワード：".$_SESSION['password']; ?>
                        </div>
                    </div>
                    <div class="comments">
                        <?php echo $_SESSION['comments']; ?>
                    </div>
					<div class="submit">
<!--                       "form_center"は、mypage_hensyu.phpはmypage.phpからのみアクセスが可能でなければいけない。(ログインできたら初めて編集できるから)-->
<!--                        制限をつけるため、rand関数で乱数をmypage_hensyu.phpにPOSTして、name属性の"from_mypage"に値が入っているかを-->
<!--                        mypage_hensyu.php内にてemptyで判定させる。-->
						<form action="mypage_hensyu.php" method="post" class="form_center">
                            <input type="hidden" name="from_mypage" value="<?php echo rand(1,10);?>">
                            <input type="submit" class="insert_botton" size="35" value="編集する">
						</form>
					</div>
				</div>	
		</main>
		<footer>
			©2019 InterNous.inc. All right reserved
		</footer>  
    </body>
</html>