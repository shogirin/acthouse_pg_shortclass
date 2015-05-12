<?php

// 正解は全て一番目
$quiz_list = array(
    array(
        'q' => 'LAMPのLは何の略？',
        'a' => array('Linux', 'LTE', 'LSI', 'LAN')
    ),
    array(
        'q' => 'LAMPのAは何の略？',
        'a' => array('Apache', 'Adobe', 'Active', 'AWS')
    ),
    array(
        'q' => 'LAMPのMは何の略？',
        'a' => array('MySql', 'Markup', 'Microsoft', 'MIME')
    ),
    array(
        'q' => 'LAMPのPは何の略？',
        'a' => array('PHP/Perl/Python', 'PC/PS3/PS4', 'Photoshop/PowerPoint', 'POST')
    )
);

// 現在何番目のクイズか？
$now_index = isset($_COOKIE['now_index'])?$_COOKIE['now_index']:0;

// 解答のチェック
if(isset($_POST['answer'])){
	// cookieに解答結果を保存
	setcookie("correct_{$now_index}", ($quiz_list[$now_index]['a'][0] == $_POST['answer'])?"正解":"不正解");
	$now_index += 1;// 次の問題へ
}

// 問題を選ぶ（最後まで解答したら、cookie破棄）
$now_quiz = array();
if(count($quiz_list) > $now_index){
	$now_quiz = $quiz_list[$now_index];
	shuffle($now_quiz['a']);// 表示順をランダムに
	setcookie('now_index', $now_index);
}

?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>簡単クイズ</title>
</head>
<body>

<?php if($now_quiz){ ?>
    <p>Q. <?php echo $now_quiz['q']; ?></p>
    <form action="" method="post">
    <?php foreach ($now_quiz['a'] as $value) {?>
	    <input type="radio"  name="answer" value="<?php echo $value; ?>"><?php echo $value; ?><br/>
    <?php } ?>
    <input type="submit" value="解答">
    </form>
<?php }else{ ?>
	<ul>
    	<li><?php echo $quiz_list[0]['q'];?>：<?php echo $_COOKIE["correct_0"];?></li>
    	<li><?php echo $quiz_list[1]['q'];?>：<?php echo $_COOKIE["correct_1"];?></li>
    	<li><?php echo $quiz_list[2]['q'];?>：<?php echo $_COOKIE["correct_2"];?></li>
    	<li><?php echo $quiz_list[3]['q'];?>：<?php echo $_COOKIE["correct_3"];?></li>
	</ul>
	<?php 
		// cookie削除
		setcookie('now_index', "", time() -1000);
		setcookie('correct_0', "", time() -1000);
		setcookie('correct_1', "", time() -1000);
		setcookie('correct_2', "", time() -1000);
		setcookie('correct_3', "", time() -1000);
	?>
	<a href="quiz_A.php">もう一度チャンレジ</a>
<?php }
?>
</body>
</html>