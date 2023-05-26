<?php
echo "<br><br>"; echo "<style>";
echo "body"."{"."background-image:url(background.jpg);"."font-family:Algerian;"."font-size:x-large;"."font-weight:bold;"."}";
echo "</style>";
$file1=$_POST["f1"];
$file2=$_POST["f2"];
$f1=fopen($file1,'r');
$f2=fopen($file2,'w');
$n=filesize($file1);
$data=fread($f1,$n);
echo "<center>";
$w="";
$count=0;
function alphabet_check($s)
{
    $flag=1;
    for($i=0;$i<strlen($s);$i++)
    {
        $asc=ord($s[$i]);
        if(($asc>=65 && $asc<=90) || ($asc>=97 && $asc<=122) || $s[$i]=='_' || $s[$i]=='-' || ($asc>=48 && $asc<=57) )
        continue;
        else
        $flag=0;
    }
    return $flag;
}
for($i=0;$i<=$n;$i++)
{
    $sub=substr($data,$i,1);
    $asc=ord($sub);
    if(($asc>=65 && $asc<=90) || ($asc>=97 && $asc<=122) || ($asc>=48 && $asc<=57) || $sub=='_' || $sub=='-')
    {
        $w=$w.$sub;
    }
    else
    {
        if(strlen($w)==0)
        continue;
        if(alphabet_check($w)==1)
        {
            $count++;
            fwrite($f2,$w);
        }        
        $w="";        
    }
}
echo "<br><br>Total number of words:- ".$count;
?>