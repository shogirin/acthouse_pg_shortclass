<?php
$pdo = new PDO('mysql:host=localhost;dbname=acthouse_pg_shortclass',
                'root',// user,passwordをDBに合わせ変更する
                '');
if(isset($_POST['name'])){
  $sql = "INSERT INTO yuru_votes (name, created) VALUES (:name, now())";
  $stmt = $dbh->prepare($sql);
  $stmt->execute(array(":answer" => $_POST['name']));
}
// GROUP BYの取得結果を参照すること
$sql = "SELECT name, COUNT(*) FROM yuru_votes GROUP BY name";
$stmt = $pdo->query($sql);
$res = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<html>
  <head>
    <!--Load the AJAX API-->
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
      google.load('visualization', '1.0', {'packages':['corechart']});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
        <?php foreach($res as $v){ ?>
          ['<?php echo $v["name"]; ?>', <?php echo $v["COUNT(*)"]; ?>],
        <?php } ?>
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