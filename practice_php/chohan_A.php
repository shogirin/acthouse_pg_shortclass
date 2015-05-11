<?php

$sais = array(mt_rand(1, 6),mt_rand(1, 6));

echo "サイコロ1：{$sais[0]}/n";
echo "サイコロ2：{$sais[1]}/n";

// http://php.net/manual/ja/function.sort.php
$sais = sort($sais);

$result = "";
if($sais[0] === 1){
	switch ($sais[1]) {
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
}elseif($sais[0] === 2){
	switch ($sais[1]) {
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
}elseif($sais[0] === 3){
	switch ($sais[1]) {
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
}elseif($sais[0] === 4){
	switch ($sais[1]) {
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
}elseif($sais[0] === 5){
	switch ($sais[1]) {
		case 5:
			$result .="ゴゾロ";
			break;
		case 6:
			$result .="ロクゾロ";
			break;
		default:
			break;
	}
}elseif($sais[0] === 6){
	switch ($sais[1]) {
		case 6:
			$result .="ゴロク";
			break;
		default:
			break;
	}
}
// 三項演算子(http://www.phpbook.jp/tutorial/if/index8.html)
$result .= (($sais[0] + $sais[1]) % 2 === 0) ? "丁":"半";
echo "結果は：{$result}";


