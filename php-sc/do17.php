<link rel="stylesheet" href="pstyle.css">
<div class="main">
<?php

$a = (int)$_GET["a"];
echo "$a =  <strong>";

switch ($a) {
	case 0: echo "Нуль"; break;
	case 1: echo "Один"; break;
	case 2: echo "Два"; break;
	case 3: echo "Три"; break;
	case 4: echo "Чотири"; break;
	case 5: echo "П'ять"; break;
	case 6: echo "Шість"; break;
	case 7: echo "Сім"; break;
	case 8: echo "Вісім"; break;
	case 9: echo "Дев'ять"; break;
	default: echo "?"; break;
}

echo "</strong>"
?>
</div>