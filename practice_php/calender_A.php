<?php
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
                <th colspan="7"><?php echo $year; ?>年<?php echo $month; ?>月</th>
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
            // 最初の開始日まで空の<td>を出力
            if($first_week_num !== 0){
                echo "<tr>";
                $first_empty = $first_week_num;
                while($first_empty--)echo "<td></td>";
            }
            for ($i=1; $i <= $last_day; $i++) {
                if(($i + $first_week_num) % 7 === 0)echo "<tr>";
                echo "<td>{$i}</td>";
                if(($i + $first_week_num) % 7 === 6)echo "</tr>";
            }
            // 残りの</td>まで空の<td>を出力
            if($i % 7 === 6){
                $last_empty = $i % 7;
                while($last_empty--)echo "<td></td>";
                echo "</tr>";
            }
            ?>
        </table>
    </body>
</html>
