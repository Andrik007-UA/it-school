<link rel="stylesheet" href="pstyle.css">
<div class="main">
<?php
echo "Отримано строки: <br /><br />";
echo "NAME: <strong>".$_POST["name"]."</strong><br />";
echo "LASTNAME: <strong>".$_POST["lastname"]."</strong><br /><br />";

echo "Доброго дня, <strong>".($_POST["lastname"]." ".$_POST["name"])."</strong>";
?>
</div>