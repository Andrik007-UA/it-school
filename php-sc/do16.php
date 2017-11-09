<link rel="stylesheet" href="pstyle.css">
<div class="main">
<?php

$a = (int)$_GET["a"];
echo "Статус: <strong>";
if($a<6)
	echo "дошкільнятко";
elseif ($a>=6 && $a<17) {
	echo "школяр";
}elseif ($a>=17 && $a<23) {
	echo "студент";
}elseif ($a>=23) {
	echo "спеціаліст";
}
echo "</strong>"
?>
</div>