<link rel="stylesheet" href="pstyle.css">
<div class="main">
<?php
date_default_timezone_set('Europe/Kiev');
$date = date("H");
if($date>=0 && $date<7)
	echo "Доброї ночі!";
else if($date>=7 && $date <=11)
	echo "Доброго ранку!";
else if($date>=12 && $date<=18)
	echo "Доброго дня!";
else if($date>=19 && $date<=23)
	echo "Доброго вечора!";
?>
</div>