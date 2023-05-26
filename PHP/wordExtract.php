<?php
// Write a program in php to extract all words from any file


$file1=$_POST['file1'];
$file2=$_POST['file2'];
$fp1=fopen($file1,'r');
$fp2=fopen($file2,'w');
echo "<body bgcolor=#000000>";
echo "<font face=arial size=6 color=orange>";
$n=filesize($file1);
$data=fread($fp1,$n);


$nw=0 ; //$nw=number of words
$flag=1; //$flag=1 means we read 1st first character of a word
$word="";
echo "Words found in ".$file1.":"."<br><br>";
for($i=0;$i<$n;$i++)
{
    $ch=$data[$i];
    $ch1=strtoupper($ch);
    if($ch1>='A' && $ch1<='Z')
    {
        if($flag==1)
        {
            $nw++;
            $flag=0;
        }
        $word=$word.$ch;
    }
    elseif($flag==0)
    {
        $flag=1;
        fwrite($fp2,$word);
        fwrite($fp2,chr(13));
        fwrite($fp2,chr(10));
        $word=$word."<br>";
        echo $word;
        $word="";
        "<br>";
    }
}
echo "<br>";
echo "Total number of words extracted=".$nw."<br>";
fclose($fp1);
fclose($fp2);
?>