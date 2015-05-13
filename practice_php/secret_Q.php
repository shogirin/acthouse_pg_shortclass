<?php
/*
* 課題：合言葉「acthouse」と入力すると、$_SESSIONを使って
*     リロードしても常に秘密のページという文言が表示されるよう実装せよ
*/
$check = false;
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>秘密のページ</title>
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