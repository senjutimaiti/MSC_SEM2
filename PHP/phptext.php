<?php
	echo "Welcome ".$_POST["naam"]."!!!<br>";

	echo isset($_REQUEST["c1"])?$_REQUEST["c1"]."<br>":"";
	echo isset($_REQUEST["c2"])?$_REQUEST["c2"]."<br>":"";
	echo isset($_REQUEST["c3"])?$_REQUEST["c3"]."<br>":"";
?>