<?php
if(isset($_POST['name']) && isset($_POST['passwprd'])){
  $pdo = new PDO('mysql:host=localhost;dbname=acthouse_pg_shortclass',
                  'root',// user,passwordをDBに合わせ変更する
                  '');
  $sql = "SELECT * FROM users WHERE name = :name AND passwprd = :passwprd";
  $stmt = $dbh->prepare($sql);
  $stmt->execute(array(":name" => $_POST['name'],":passwprd" => sha1($_POST['passwprd']));
  $user = $stmt->fetch(PDO::FETCH_ASSOC);
  if($user){
    session_start();
    $_SESSION['user_name'] = $user['name'];
    header('location: chat2_Q.php');
    exit;
  }
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap Template</title>
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
 <div class="container">
<h1 class="bg-primary">ログイン</h1>
<form action="" method="post">
  <div class="form-group">
  <label>ID</label>
  <input type="text" name="name" value="">
  <label>パスワード</label>
  <input type="text" name="passwprd" value="">
  </div>
  <button type="submit" class="btn btn-default">ログイン</button>
</form>
</div>
</body>
</html>