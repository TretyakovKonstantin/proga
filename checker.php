<html>
<head>
  <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
  <link rel="SHORTCUT ICON" href="/42.png" type="image/png">
</head>
<body>
<?php
  $error_message = "Ошибка валидации!<br>\n";
  $was_error = false;
  $radius = (is_numeric($_POST['r']) ? intval($_POST['r']) : null);
  $x = (is_numeric($_POST['x']) ? intval($_POST['x']) : null);
  $y = (is_numeric($_POST['y']) ? floatval($_POST['y']) : null);
  $start = microtime(true);
  if (is_null($x) || $x < -3 || $x > 5) {
      $error_message .= "Неверно указан параметр ‘x’. Пожалуйста, укажите целое значение из интервала [-3, 5].<br>\n";
      $was_error = true;
  }
  if (is_null($y) || $y <= -5 || $y >= 5) {
      $error_message .= "Неверно указан параметр ‘y’. Пожалуйста, укажите вещественное значение из интервала (-5, 3).<br>\n";
      $was_error = true;
  }
  if (is_null($radius) || $radius < 1 || $radius > 3) {
      $error_message .= "Неверно указан параметр ‘r’. Пожалуйста, укажите целое значение от 1 до 3.<br>\n";
      $was_error = true;
  }
  if(!$was_error) {
    $in2 = ($x <= 0 && $y >= 0) && (-$radius <= $x && $radius/2 >= $y);
    $in3 = ($x <= 0 && $y <= 0) && ($y <= $radius - $x);
    $in4 = ($x <= 0 && $y <= 0) && ($x*$x + $y*$y <= $radius*$radius);
    $result = $in2 || $in3 || $in4;
    $result ? $result = "Точка входит в область.<br>\n" : $result = "Точка находится вне области.<br>\n";
  }
  $total_time = microtime(true) - $start;
?>
<?php include 'index.php'; ?>
<br>
<table align="center" cellpadding="0" cellspacing="0" class="table2">
  <tbody align="center" class="result">
    <tr>
      <td>
        <?php
          echo $was_error ? $error_message : $result;
		  echo "r = ".$radius . "<br>\n";
          echo "x = ".$x . "<br>\n";
          echo "y = ".$y . "<br>\n";
          
        ?>
      </td>
    </tr>
	<tr>
		<td>
		<?php
          echo date('Y-m-d H:i:s') . "<br>\n";
          echo "Время работы: ".$total_time . "<br>\n";
        ?>
		</td>
	</tr>
  </tbody>
</table>
</body>
</html>