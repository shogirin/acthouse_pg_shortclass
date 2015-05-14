<?php
$pdo = new PDO('mysql:host=localhost;dbname=acthouse_pg_shortclass',
'root',// user,passwordをDBに合わせ変更する
'');

// 投稿された場合
if(isset($_POST['name']) && isset($_POST['massage'])){
  $sql = "INSERT INTO pure_chats (name, message, created) VALUES (:name, :message, now())";
  $stmt = $dbh->prepare($sql);
  $stmt->execute(array(":answer" => $_POST['name'], ":message" => $_POST['message']));
}

$sql = "SELECT name, message FROM pure_chats ORDER BY id";
$stmt = $pdo->query($sql);
$chats = $stmt->fetchAll(PDO::FETCH_ASSOC);

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

		<hr/>
	<?php foreach($chats as $v): ?>
		<div class="col-lg-12">
			<h2><?php echo $v['name']; ?>さん</h2>
			<p><?php echo $v['massage']; ?></p>
		</div>
	<?php endforeach; ?>

	</div>
</body>
</html>
