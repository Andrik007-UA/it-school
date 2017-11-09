<link rel="stylesheet" href="pstyle.css">
<div class="main">
<?php

$a = (int)$_GET["a"];
echo "$a по порядку день тижня - це <strong>";

switch ($a) {
	case 1: echo "Понеділок"; break;
	case 2: echo "Вівторок"; break;
	case 3: echo "Середа"; break;
	case 4: echo "Четвер"; break;
	case 5: echo "П'ятниця"; break;
	case 6: echo "Субота"; break;
	case 7: echo "Неділя"; break;
	default: echo "?"; break;
}

echo "</strong>"
?>
</div>