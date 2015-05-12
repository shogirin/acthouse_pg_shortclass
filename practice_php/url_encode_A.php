<?php
$encode_str = '';
if(isset($_GET['input'])){
    $encode_str = urlencode($_GET['input']);
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
<h1 class="bg-primary">URLエンコード</h1>
<form action="" method="get">
  <div class="form-group">
    <textarea class="form-control" name="input" rows="3"></textarea>
  </div>
  <button type="submit" class="btn btn-default">エンコード</button>
</form>

<h1 class="bg-primary">デコード結果</h1>
<textarea class="form-control" rows="3"><?php echo $encode_str; ?></textarea>
</div>
</body>
</html>