<?php
/**
  * 課題：PDOを駆使して、すでに記述された$sqlを実行し、26行に取得した結果を出力せよ
  * 参照：https://google-developers.appspot.com/chart/interactive/docs/quick_start
**/
$pdo = new PDO('mysql:host=localhost;dbname=acthouse_pg_shortclass',
                'root',// user,passwordをDBに合わせ変更する
                '');
if(isset($_POST['name'])){
  $sql = "INSERT INTO yuru_votes (name, created) VALUES (:name, now())";
}
// GROUP BYの取得結果を参照すること
$sql = "SELECT name, COUNT(*) FROM yuru_votes GROUP BY name";
?>
<html>
  <head>
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
      google.load('visualization', '1.0', {'packages':['corechart']});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
          // この値をDB：vote_yuruの内容に書き換えよ
          ['Mushrooms', 3],
          ['Onions', 1],
          ['Olives', 1],
          ['Zucchini', 1],
          ['Pepperoni', 2]
        ]);
        var options = {'title':'ゆるキャラ投票結果',
                       'width':400,
                       'height':300};
        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
  </head>

  <body>
    <!--Div that will hold the pie chart-->
    <div id="chart_div"></div>
  </body>
</html>