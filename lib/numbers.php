<?php
function fibonachi($n){
	$sqrt5 = sqrt(5);
	$phi_const = ($sqrt5 + 1) /2;
	return int(pow($phi_const, $n) / $sqrt5 + 0.5);
}