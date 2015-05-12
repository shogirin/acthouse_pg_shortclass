<?php

session_start();

$check = false;
if(isset($_SESSION['checked']) && $_SESSION['checked'] === true){
  $check = true;
}else{
  if(isset($_POST['pass']){
    $check = ($_POST['pass'] == "acthouse")?true:false;
    $_SESSION['checked'] = $check;
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
<?php if($check){ ?>
  <div class="page-header">
    <h1>秘密のページ</h1>
  </div>
<?php }else{ ?>
  <h1 class="bg-primary">秘密の合言葉は？</h1>
  <form action="" method="post">
    <div class="form-group">
    <label>合言葉</label>
    <input type="text" name="pass" value="">
    </div>
    <button type="submit" class="btn btn-default">ログイン</button>
  </form>
<?php } ?>
</div>
</body>
</html>