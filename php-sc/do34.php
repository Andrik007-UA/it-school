<link rel="stylesheet" href="pstyle.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<div class="main">
<?php
$arr = [];
echo "<strong>\$a</strong> = <strong>[</strong>";
for($i=0;$i<10;$i++){
	$arr[$i]=rand(10, 230);
	echo "<strong>".$arr[$i]."</strong>";
	if($i != 9) echo ", "; else echo "<strong>]</strong>;<br />";
}
$sum = function(){
	$s = 0;
	global $arr;
	foreach($arr as $v)
		$s+=$v;
	return $s;
};
$reout = function(){
	$r = "";
	$r .= "<br /><p align='right'><strong>\$a</strong> = <strong>[</strong>";
	global $arr;
	for($i=0;$i<10;$i++){
		$r .= "<strong>".$arr[$i]."</strong>";
		if($i != 9) $r .= ", "; else $r .= "<strong>]</strong>;<br /></p>";
	}
	return $r;
};
$max = function(){
	global $arr;
	$max = 0;
	foreach($arr as $v)if($v > $max) $max = $v;
	return $max;
};
echo "Сума = <strong>".($sum())."</strong>".($reout());
echo "Vfrc = <strong>".($max())."</strong>".($reout());

?>


</div>