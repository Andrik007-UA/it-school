<link rel="stylesheet" href="pstyle.css">
<div class="main">
<?php
error_reporting(E_ALL);
$a =(int)$_GET["n1"];
$b =(int)$_GET["n2"];
$c =(int)$_GET["n3"];
$min = min($a, min($b, $c));
if($min == $a)
?>
</div>