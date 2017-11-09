<link rel="stylesheet" href="pstyle.css">
<div class="main">
<?php
error_reporting(E_ALL);
echo "Отримано числа: <br /><br />";
echo "X1: <strong>".($_POST["x1"])."</strong><br />";
echo "Y1: <strong>".($_POST["y1"])."</strong><br />";
echo "X2: <strong>".($_POST["x2"])."</strong><br />";
echo "Y2: <strong>".($_POST["y2"])."</strong><br /><br />";

echo "Відстань від X до Y: <strong>".(sqrt(pow($_POST["x1"] - $_POST["x2"], 2) + pow($_POST["y1"] - $_POST["y2"], 2)))."</strong>";
?>
</div>