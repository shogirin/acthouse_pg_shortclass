<?php

$arr = array('大吉', '中吉', '小吉', '吉', '凶', '末吉');

?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js?ver=3.8.1"></script>
    <meta charset="utf-8">
    <title>おみくじ</title>
</head>
<body>
    <h1>おみくじ</h1>
    <p>今日の運勢は「<?php echo $arr[mt_rand(0, count($arr)-1)]; ?>」です！</p>
    <p><a href="omikuji_A.php">もう一度！</a></p>
</body>
</html>

