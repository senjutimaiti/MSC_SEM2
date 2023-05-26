<?php
	echo "<center>";
	echo "<br><br>";
	echo "<style>";
	echo "body"."{"."background-image:url(img.jpg);"."font-family:Algerian;"."font-size:x-large;"."font-weight:bold;"."}";
	echo "</style>";
	$f1=$_POST['file1'];
	$f2=$_POST['file2'];
	$p1=$_POST['p1'];
	$p2=$_POST['p2'];
	$fp1=fopen($f1,"r");
	$fp2=fopen($f2,"w");
	$n=filesize($f1);
	$n1=strlen($p1);
	$data=fread($fp1,$n);
	$data1=str_ireplace($p1,$p2,$data);
	$count=substr_count($data,$p1);
	$count1=0;
	$data1="";
	for($i=0;$i<$n;$i++)
	{
		$sub=substr($data,$i,$n1);
		if(strcasecmp($sub, $p1)==0)
		{
			$i=$i+$n1-1;
			$count1++;
			$data1=$data1.$p2;
		}
		else
			$data1=$data1.$data[$i];
	}
	fwrite($fp2,$data1);
	echo "Original String= ".$data."<br><br>";
	echo "Modified String= ".$data1."<br><br>";
	echo "Case Sensitive pattern matches= ".$count."<br><br>";
	echo "Case In-Sensitive pattern matches=".$count1."<br><br>";
?>

