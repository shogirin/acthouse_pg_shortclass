<?php
/*
 * 課題：$_COOKIEを使って、クイズを順番に解答させる。可能であれば正解数を出す。
 */
$quizList = array(
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

?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>簡単クイズ</title>
</head>
<body>
    <p>Q. クイズ名</p>
    <form action="" method="post">
        <input type="radio"  name="answer" value="解答">解答<br/>
        <input type="submit" value="解答">
    </form>
</body>
</html>