<?php

	function hcf($x, $y){
		$r = $x % $y;
		while($r!=0){
			$x = $y;
			$y = $r;
			$r = $x % $y;
		}
		return $y;
	}

	function lcm($x, $y){
		return ($x * $y / hcf($x, $y));
	}

	function palindrome($x){
		$x = strtoupper($x);
		$l = strlen($x);
	}

	#main

	$a = $_REQUEST["n1"];
	$b = $_REQUEST["n2"];
	
	echo "HCF of the numbers ".$a." & ".$b." is: ".hcf($a, $b)."<br>";
	echo "LCM of the numbers ".$a." & ".$b." is: ".lcm($a, $b);

?>