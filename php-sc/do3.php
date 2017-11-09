<link rel="stylesheet" href="pstyle.css">
<div class="main">
<?php
error_reporting(E_ALL);
echo "Отримано числа: <br /><br />";
echo "A: <strong>".($_POST["a"])."</strong><br />";
echo "B: <strong>".($_POST["b"])."</strong><br /><br />";

echo "A+B: <strong>".($_POST["a"]+$_POST["b"])."</strong><br />";
echo "A-B: <strong>".($_POST["a"]-$_POST["b"])."</strong><br />";
echo "A*B: <strong>".($_POST["a"]*$_POST["b"])."</strong><br />";
?>
</div>