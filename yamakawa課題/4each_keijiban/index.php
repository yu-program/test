<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="UTF-8">
		<title>掲示板</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<?php
		
		mb_internal_encoding("utf8");
		$pdo = new PDO("mysql:dbname=yamakawa;host=localhost;","root","mysql");
		$stmt = $pdo -> query("select * from 4each_keijiban");
		
		?>
		<header>
			<img src="4eachblog_logo.jpg">
			<div class="menu">
				<ul>
					<li>トップ</li>
					<li>プロフィール</li>
					<li>4eachについて</li>
					<li>登録フォーム</li>
					<li>問い合わせ</li>
					<li>その他</li>
				</ul>
			</div>
		</header>
		<main>
			<div class="left">
					<h1>プログラミングに役立つ掲示板</h1>
				<div class= "input_form">
					<h2>入力フォーム</h2>
					<form method="post" action="insert.php">
						<p>ハンドルネーム</p>
						<input type="text" size="50" class="text" name="handlename">
						<p>タイトル</p>
						<input type="text" size="50" class="text" name="title">
						<p>コメント</p>
						<textarea class="text" rows=7 cols=80 name="comments" ></textarea>
						<input class="submit" type="submit" value="投稿する">
					</form>
				</div>
				<?php
				
				while($row = $stmt ->fetch()){
					echo "<div class='text1'>";
					echo "<h3>".$row['title']."</h3>";
					echo "<div class='contents'>";
					echo $row['comments'];
					echo "<div class='handlename'>posted by ".$row['handlename']."</div>";
					echo "</div>";
					echo "</div>";	
				}
				
				?>
			</div>
			<div class="right">
				<h3>人気の記事</h3>
					<ul class="menu_list">
						<li>PHPオススメ本</li>
						<li>PHP　MyAdminの使い方</li>
						<li>今人気のエディタTop5</li>
						<li>HTMLの準備</li>
						
					</ul>
				<h3>オススメリンク</h3>
					<ul class="menu_list">
						<li>インターノウス株式会社</li>
						<li>XAMMPのダウンロード</li>
						<li>Eclipsのダウンロード</li>
						<li>Brackesのダウンロード</li>
					</ul>
				<h3>カテゴリ</h3>
					<ul class="menu_list">
						<li>HTML</li>
						<li>PHP</li>
						<li>MySQL</li>
						<li>javascript</li>
					</ul>
			</div>			
		</main>
		<footer>
			<div class="footer_box">copyright©internous| 4each blog the which provide A to Z about programming.</div>
		</footer>
	</body>
</html>