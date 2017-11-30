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
	foreach($arr as $i){
		$r .= "<strong>".$i."</strong>, ";
	}
	$r .= "<strong>]</strong>;<br /></p>";
	return $r;
};
$max = function(){
	global $arr;
	$max = 0;
	foreach($arr as $v)if($v > $max) $max = $v;
	return $max;
};
$avr = function(){
	global $arr;
	$averg = 0;
	foreach($arr as $v)
		$averg += $v;
	return round($averg/10, 2);
};
$evn = function(){
	global $arr;
	$s = 0;
	foreach($arr as $v)
		if($v%2 == 0) $s+=$v;
	return $s;
};
$del = function(){
	global $arr;
	$art = $arr;
	$n = rand(1, 11);
	$r = $art[$n-1];
	unset($art[$n-1]);
	return $r;
};
$inv = function(){
	global $arr;
	for($i = 0; $i<5; $i++){
		$tmp = $arr[$i];
		$arr[$i] = $arr[9-$i];
		$arr[9-$i] = $tmp;
	}
};
$zer = function(){
	global $arr;
	foreach($arr as &$v)
		if($v%2!=0) $v = 0;
};
$swp = function(){
	global $arr;
	$tmp = $arr[0];
	$arr[0] = $arr[9];
	$arr[9] = $tmp;
};
$sw2 = function(){
	global $arr;
	$tmp = $arr[0];
	$arr[0] = $arr[9];
	$arr[9] = $tmp;
};
echo "<br />Сума     = <strong>".($sum())."</strong>"."<br />";
echo "<br />Макс     = <strong>".($max())."</strong>"."<br />";
echo "<br />Average  = <strong>".($avr())."</strong>"."<br />";
echo "<br />Sum even = <strong>".($evn())."</strong>"."<br />";
echo "<br />Del elem = <strong>".($del())."</strong>".($reout());
echo "<br />Invt \$a <strong>".($inv())."</strong>".($reout());
echo "<br />Zero odd = <strong>".($zer())."</strong>".($reout());
echo "<br />Swap fnl = <strong>".($swp())."</strong>".($reout());

?>


</div>