<link rel="stylesheet" href="pstyle.css">
<div class="main">
<?php
echo "Отримано числа: <br /><br />";
echo "A: <strong>".$_POST["a"]."</strong><br />";
echo "B: <strong>".$_POST["b"]."</strong><br />";
echo "C: <strong>".$_POST["c"]."</strong><br /><br />";

echo "Потрібно <strong>".($_POST["a"]*$_POST["c"]*2  + $_POST["b"]*$_POST["c"]*2)."</strong> кілограм фарби";
?>
</div>