<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>Heizung</title>

  <link href="style.css" type="text/css" rel="stylesheet"/>
</head>

<?php
include 'sensor_utils.php.inc';
include 'utils.php.inc';

set_loc_settings();

$aussentemp = get_min_max_interval(SensorAussenTemp, "1 day");
$aussentemp_today = get_min_max_for_day(SensorAussenTemp, 0);
$aussentemp_yesterday = get_min_max_for_day(SensorAussenTemp, 1);
$raumtemp = get_min_max_interval(SensorRaumIstTemp, "1 day");
?>

<body topmargin=0 leftmargin=0 marginwidth=0 marginheight=0>
  <table style="width:800; text-align:center;">
    <tr><td>
      <h2>Letzter Tag</h2>
    </td></tr>
    <tr><td>
      <?php include 'menu.inc'; ?>
    </td></tr>
    <tr height=10></tr>
    <tr><td>
      <table border=0 cellspacing=0 cellpadding=0 width="100%">
        <tr><td>
          <?php print_min_max_table("Außentemperatur in den letzten 24h", $aussentemp); ?>
        </td></tr>
        <tr height=6></tr>
        <tr><td>
          <?php print_min_max_table("Außentemperatur heute", $aussentemp_today, TRUE); ?>
        </td></tr>
        <tr height=6></tr>
        <tr><td>
          <?php print_min_max_table("Außentemperatur gestern", $aussentemp_yesterday, TRUE); ?>
        </td></tr>
        <tr height=6></tr>
        <tr><td>
          <?php print_min_max_table("Raumtemperatur in den letzten 24h", $raumtemp); ?>
        </td></tr>
      </table>
    </td></tr>
  </table>
  <h3>Graphen</h3>
  <p>
    <img src="graphs/aussentemp-day.png" alt="Außentemperaturentwicklung">
  </p>
  <p>
    <img src="graphs/raumtemp-day.png" alt="Raumtemperaturentwicklung">
  </p>
  <p>
    <img src="graphs/kessel-day.png" alt="Kesseltemperaturentwicklung">
  </p>
  <p>
    <img src="graphs/ww-day.png" alt="Warmwassertemperaturentwicklung">
  </p>
</body>

</html>

