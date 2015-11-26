<?php
/**
* 課題：以下の処理を関数定義を行い、処理を分割、整理せよ
* ヒント：処理を文章の段落のように分け、処理内容を分別させることを念頭に考える
**/

$dice = array(mt_rand(1, 6),mt_rand(1, 6));
echo "サイコロ1：{$dice[0]}\n";
echo "サイコロ2：{$dice[1]}\n";
// http://php.net/manual/ja/function.sort.php
sort($dice);

$result = "";
if($dice[0] === 1){
	switch ($dice[1]) {
		case 1:
			$result .= "ピンゾロ";
			break;
		case 2:
			$result .= "イチニ";
			break;
		case 3:
			$result .="サンミチ";
			break;
		case 4:
			$result .="ヨイチ";
			break;
		case 5:
			$result .="グイチ";
			break;
		case 6:
			$result .="イチロク";
			break;
		default:
			break;
	}
}elseif($dice[0] === 2){
	switch ($dice[1]) {
		case 2:
			$result .="ニゾロ";
			break;
		case 3:
			$result .="サニ";
			break;
		case 4:
			$result .="シニ";
			break;
		case 5:
			$result .="グニ";
			break;
		case 6:
			$result .="ニロク";
			break;
		default:
			break;
	}
}elseif($dice[0] === 3){
	switch ($dice[1]) {
		case 3:
			$result .="サンゾロ";
			break;
		case 4:
			$result .="シソウ";
			break;
		case 5:
			$result .="グサン";
			break;
		case 6:
			$result .="サブロク";
			break;
		default:
			break;
	}
}elseif($dice[0] === 4){
	switch ($dice[1]) {
		case 4:
			$result .="シゾロ";
			break;
		case 5:
			$result .="グシ";
			break;
		case 6:
			$result .="シロク";
			break;
		default:
			break;
	}
}elseif($dice[0] === 5){
	switch ($dice[1]) {
		case 5:
			$result .="ゴゾロ";
			break;
		case 6:
			$result .="ゴロク";
			break;
		default:
			break;
	}
}elseif($dice[0] === 6){
	switch ($dice[1]) {
		case 6:
			$result .="ロクゾロ";
			break;
		default:
			break;
	}
}
// 三項演算子(http://www.phpbook.jp/tutorial/if/index8.html)
$result .= (($dice[0] + $dice[1]) % 2 === 0) ? "丁":"半";
echo "結果は：{$result}";
