<?php
/*
 * 課題；今月のカレンダーをtableタグで再現する
 * ヒント：PHPのdate関数の仕様を参照し、以下で作成している変数を駆使せよ。
 * 曜日の判別は7で割る剰余演算子を各日付に用いると、対応する曜日がわかる
 */
$first_day_timestamp = strtotime(date("Y-m-01"));
// 月の最後の日付
$last_day = date("t", $first_day_timestamp);
// 月の最初の日付の曜日
$first_week_num = date("w", $first_day_timestamp);
?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8" />
        <title>今月カレンダー</title>
        <style>
            td {
                padding: 5px;
                border: 1px solid #ccc;
                text-align: right;
            }
            th {
                padding: 5px;
                border: 1px solid #ccc;
                text-align: center;
                background-color: #eee;
            }
            th.sun, td.sun {
                color: red;
                font-weight: bold;
            }
            th.sat, td.sat {
                color: blue;
                font-weight: bold;
            }
        </style>
    </head>
    <body>
        <h1>PHPの練習</h1>
        <table>
            <tr>
                <th colspan="7"><?php echo date("Y年m月"); ?></th>
            </tr>
            <tr>
                <th class="sun">日</th>
                <th>月</th>
                <th>火</th>
                <th>水</th>
                <th>木</th>
                <th>金</th>
                <th class="sat">土</th>
            </tr>
            <?php

            ?>
        </table>
    </body>
</html>
