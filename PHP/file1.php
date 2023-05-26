<!DOCTYPE html>
<html>
<head>
	<title>File1</title>
</head>
<body>
<?php
	$file1 = $_REQUEST["file1"];
	$file2 = $_REQUEST["file2"];
	$f1 = fopen($file1, "r");
	$f2 = fopen($file2, "w");
	$n = filesize($file1);
	for ($i = 0; $i < $n; $i++)
	{
		$ch = fgetc($f1);
		fwrite($f2,$ch);
	}
	fclose($f1);
	fclose($f2);
?>
</body>
</html>