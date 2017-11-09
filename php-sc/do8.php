<link rel="stylesheet" href="pstyle.css">
<div class="main">
<?php
$a = $_POST["sum"];
$b = $_POST["to"];
echo "Перетворено <strong>$a &#8372;</strong> в <strong>";
switch($b){
	case "dollar":echo ($a/26.63)." &dollar;"; break;
	case "euro":echo ($a/30.87)." &euro;"; break;
	case "pound":echo ($a/34.95)." &pound;"; break;
}
echo "</strong>. <i>".date('D d/m/Y H:i:s');
?>
</div>