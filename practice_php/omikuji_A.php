<?php

$arr = array('大吉', '中吉', '小吉', '吉', '凶', '末吉');
echo "今日の運勢は{$arr[mt_rand(0, count($arr)-1)]}です！";
