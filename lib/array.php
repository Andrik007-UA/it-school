<?php
function sum($array, $from, $to){
	$sum = 0;
	for($i=$from;$i<$to;$i++)
		if(is_numeric($array[$i])) $sum+=$array[$i];
	return $sum;
}
function sum($array){
	$sum = 0;
	foreach ($array as $v) {
		if(is_numeric($v)) $sum+=$v;
	}
	return $sum;
}
function sum($array, $cound, $is_eval){
	$sum = 0;
	foreach ($array as $v) {
		if($is_eval){
			if(eval($cound)) if(is_numeric($v)) $sum+=$v;
		}else{
			if($cound) if(is_numeric($v)) $sum+=$v;
		}
	}
	return $sum;
}
function min_and_max($array){
	$min = 2000000000;
	$max = -2000000000;
	$i_n = 0;
	$i_x = 0;
	foreach($array as $k => $v){
		if(!is_numeric($v)) continue;

		if($max <= $v){
			$max = $v;
			$i_x = $k;
		}else if($min >= $v){
			$min = $v;
			$i_n = $k;
		}
	}	

	return ["min"=>["value"=>$min, "index"=>$i_n], "max"=>["value"=>$max, "index"=>$i_m]];
}