<!DOCTYPE html>
<html>
<head>
	<title>Php Password</title>
</head>
<body>
	<?php
		$text = $_REQUEST["data"];
		if ($_REQUEST["pwd"] == "tinni"){
	?>
		<h3>Correct Password</h3>
	<?php
		} else {
	?>
		<h3>Wrong Password</h3>
	<?php
		}
		echo str_replace("\n","<br>",$text);
	?>
</body>
</html>