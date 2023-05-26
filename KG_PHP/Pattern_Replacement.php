<?php
echo "<center>";
echo "<br><br><br><br>";
echo "<style>";
echo "body"."{"."background-image:url(background.jpg);"."font-family:Algerian;"."font-size:x-large;"."font-weight:bold;"."}";
echo "</style>";
$file1=$_POST["f1"];
$file2=$_POST["f2"];
$pat1=$_POST["p1"];
$pat2=$_POST["p2"];
$fp1=fopen($file1,'r');
$fp2=fopen($file2,'w');
$n=filesize($file1);
$n1=strlen($pat1);
$data=fread($fp1,$n);
#$data1=str_ireplace($pat1,$pat2,$data);#case-insensitive pattern replacement function
$count=substr_count($data,$pat1);#for case-sensitive matches
$count1=0;
$data1="";
for($i=0;$i<$n;$i++)
{
    $sub=substr($data,$i,$n1);
    if(strcasecmp($sub,$pat1)==0)
    {
        $i=$i+$n1-1;
        $count1++;#for case-insensitive matches
        $data1=$data1.$pat2;
    }
    else
    $data1=$data1.$data[$i];
}
fwrite($fp2,$data1);
echo "Original String: ".$data; echo "<br><br>";
echo "Modified String: ".$data1; echo "<br><br>";
echo "Case Sensitive Pattern Matches: ".$count;
echo "<br><br>";
echo "Case Insensitive Pattern Matches: ".$count1;
?>
