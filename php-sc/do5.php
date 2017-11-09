<link rel="stylesheet" href="pstyle.css">
<div class="main">
<?php
echo "Отримано числа: <br /><br />";
echo "HOURS: <strong>".$_POST["hours"]."</strong><br /><br />";

echo "Секунд у \"HOURS\": <strong>".($_POST["hours"]*3600)."</strong>";
?>
</div>