<?php
echo "<center>";
echo "<h1>"."<u>"."EMPLOYEE DETAILS"."</u>"."</h1>";
echo "<br><br><br><br>";
echo "<style>";
echo "body"."{"."background-image:url(background.jpg);"."font-face:Algerian"."}";
echo "td";
echo "{";
echo "font-family:Comic Sans MS;";
echo "font-size:larger;";
echo "padding:10px;";
echo "text-align:center";
echo "}";
echo "th"."{"."font-family:Cambria;"."font-size:x-large;"."}";
echo "</style>";
$file=$_POST["f1"];
$name=$_POST["f2"];
$email=$_POST["f3"];
$mobile=$_POST["f4"];
$f=fopen($file,'a');
fwrite($f,$name);
fwrite($f,chr(9));
fwrite($f,$email);
fwrite($f,chr(9));
fwrite($f,$mobile);
fwrite($f,chr(13));
fwrite($f,chr(10));
fclose($f);
$f=fopen($file,'r');
$n=filesize($file);
$data=fread($f,$n);
$i=0;
$c=0;
echo "<table border=4 width=75%>";
echo "<tr>"."<th>"."Name"."</th>"."<th>"."Email"."</th>"."<th>"."Mobile No."."</th>";
while($i<$n)
{
    $s=substr($data,$i);
    $strpos=stripos($s,chr(10));
    $s=substr($s,0,$strpos);
    $d=explode(chr(9),$s);
    $name=$d[0];
    $email=$d[1];
    $mobile=$d[2];
    echo "<tr>"."<td>".$name."</td>"."<td>".$email."</td>"."<td>".$mobile."</td>"."</tr>";
    $i=$i+$strpos+1;
    $c++;
}
echo "</table>";
fclose($f);
echo "<h2>"."<u>"."Total no. of records:- "."$c"."</u>"."</h2>";
?>