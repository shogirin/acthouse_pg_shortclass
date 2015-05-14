<?php
/**
* 課題：以下の処理を関数定義を行い、処理を分割、整理せよ
* ヒント：処理を文章の段落のように分け、各内容を関数で分けるなど
*       構造を明確に分別させることを念頭に考える
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
			return  "ピンゾロ";
			break;
		case 2:
			return  "イチニ";
			break;
		case 3:
			return "サンミチ";
			break;
		case 4:
			return "ヨイチ";
			break;
		case 5:
			return "グイチ";
			break;
		case 6:
			return "イチロク";
			break;
		default:
			break;
	}
}elseif($dice[0] === 2){
	switch ($dice[1]) {
		case 2:
			return "ニゾロ";
			break;
		case 3:
			return "サニ";
			break;
		case 4:
			return "シニ";
			break;
		case 5:
			return "グニ";
			break;
		case 6:
			return "ニロク";
			break;
		default:
			break;
	}
}elseif($dice[0] === 3){
	switch ($dice[1]) {
		case 3:
			return "サンゾロ";
			break;
		case 4:
			return "シソウ";
			break;
		case 5:
			return "グサン";
			break;
		case 6:
			return "サブロク";
			break;
		default:
			break;
	}
}elseif($dice[0] === 4){
	switch ($dice[1]) {
		case 4:
			return "シゾロ";
			break;
		case 5:
			return "グシ";
			break;
		case 6:
			return "シロク";
			break;
		default:
			break;
	}
}elseif($dice[0] === 5){
	switch ($dice[1]) {
		case 5:
			return "ゴゾロ";
			break;
		case 6:
			return "ゴロク";
			break;
		default:
			break;
	}
}elseif($dice[0] === 6){
	switch ($dice[1]) {
		case 6:
			return "ロクゾロ";
			break;
		default:
			break;
	}
}
// 三項演算子(http://www.phpbook.jp/tutorial/if/index8.html)
return  (($dice[0] + $dice[1]) % 2 === 0) ? "丁":"半";
echo "結果は：{$result}";