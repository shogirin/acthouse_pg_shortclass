<?php
/**
  * 課題：PDOを駆使して投稿データの登録、表示を同時に行うページを作成せよ
  * ヒント：投稿されたかどうかは、$_POSTの有無で判断する
**/
$pdo = new PDO('mysql:host=localhost;dbname=acthouse_pg_shortclass',
                'root',// user,passwordをDBに合わせ変更する
                '');
?>
<!DOCTYPE html>
<html>
<head>
	<title>掲示板</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<style>
	.container {
	  width: auto;
	  max-width: 680px;
	  padding: 0 15px;
	}
	</style>

</head>
<body>

    <div class="container">
      <div class="page-header">
		<h1>掲示板</h1>
      </div>

	  <form action="" method="post">
          <div class="form-group">
            <label for="input_name">名前</label>
            <input type="text" class="form-control" id="input_name" name="name" placeholder="名前">
        </div>
        <div class="form-group">
            <label for="message">本文</label>
            <textarea class="form-control" id="message" rows="3" name="message"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">投稿</button>
      </form>

<!--
 以下↓の内容を上でDBで取得した内容に書き換える-->

		<hr/>

			<div class="col-lg-12">
				<h2>user1さん</h2>
				<p>1番目に登録されたユーザーです。</p>
			</div>

			<div class="col-lg-12">
				<h2>user2さん</h2>
				<p>2番目に登録されたユーザーです。</p>
			</div>

			<div class="col-lg-12">
				<h2>user3さん</h2>
				<p>3番目に登録されたユーザーです。</p>
			</div>

			<div class="col-lg-12">
				<h2>user4さん</h2>
				<p>4番目に登録されたユーザーです。</p>
			</div>

			<div class="col-lg-12">
				<h2>user5さん</h2>
				<p>5番目に登録されたユーザーです。</p>
			</div>

			<div class="col-lg-12">
				<h2>user6さん</h2>
				<p>6番目に登録されたユーザーです。</p>
			</div>

			<div class="col-lg-12">
				<h2>user7さん</h2>
				<p>7番目に登録されたユーザーです。</p>
			</div>

			<div class="col-lg-12">
				<h2>user8さん</h2>
				<p>8番目に登録されたユーザーです。</p>
			</div>
<!-- ここまで-->
	</div>
</body>
</html>
