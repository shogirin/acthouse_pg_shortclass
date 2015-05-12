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
if($_POST['answer']){
	// cookieに解答結果を保存
	$correct = isset($_COOKIE['correct'])?$_COOKIE['correct']:array();
	$correct[$now_index] = ($quiz_list[$now_index]['a'][0] == $_POST['answer']);
	setcookie('correct', $correct);
	$now_index += 1;// 次の問題へ
}

// 問題を選ぶ（最後まで解答したら、cookie破棄）
$now_quiz = array();
if(count($quiz_list) < $now_index){
	unset($_COOKIE["now_index"]);
	unset($_COOKIE["correct"]);
}else{
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
    <?php foreach ($_SESSION['correct'] as $key => $value) {?>
    	<li><?php echo $quiz_list[$key]['q'];?>：<?php echo $value?"正解":"不正解" ;?></li>	
    <?php } ?>
	</ul>
	<a href="quiz_A.php">もう一度チャンレジ</a>
<?php } ?>
</body>
</html>