<?php
//search2.php : Write php code to search email in a table
$servername='127.0.0.1';
$username='root';
$password='';
$dbname=$_POST['dbname'];
$tablename=$_POST['table1'];
$email=$_POST['email'];
$connect=mysqli_connect($servername,$username,$password,$dbname);
 if($connect)
 {
 echo "Database Connected".'<br>';
 }
 else
 {
 die("***Database cannot be connected***");
 }
echo '<body bgcolor=#00aa55><font face=times new roman size=6 color=#0000ff>';
$sql1="SELECT * from $tablename";
$result1=mysqli_query($connect,$sql1);
 if($result1)
 {
 echo $tablename." found".'<br>';
 echo "<table align=center colspan=2 rowspan=2 border=2 bgcolor=white>";
 echo "<tr>";
 echo "<td><font face=times new roman size=6 color=#0000ff>"."Rec#"."</td>";
 echo "<td><font face=times new roman size=6 color=#0000ff>"."Name"."</td>";
 echo "<td><font face=times new roman size=6 color=#0000ff>"."Email"."</td>";
 echo "<td><font face=times new roman size=6 color=#0000ff>"."Phone#"."</td>";
 echo "</tr>";
 $nrec=0; // $nrec=Number of records
 $n1=0;
while($rows=mysqli_fetch_assoc($result1))
{
$nrec++;
$email1=strtoupper($rows['email']);
 $email2=strtoupper($email);
 $n=strstr($email1,$email2);
 if($n!=0)
 {
 $n1++;
 echo "<tr>";
 echo "<td><font face=times new roman size=6 color=#0000ff>".$nrec."</td>";
 echo "<td><font face=times new roman size=6 color=#0000ff>".$rows['name']."</td>";
 echo "<td><font face=times new roman size=6 color=#0000ff>".$rows['email']."</td>";
 echo "<td><font face=times new roman size=6 color=#0000ff>".$rows['phone']."</td>";
 echo "</tr>";
 }
 }
 echo "</table>";
 if ($n1==0)
 echo $name." not found".'<br>';
 else
 echo "Number of times ".$email. " found=".$n1.'<br>';

 }
 else
 {
 echo $tablename." not found".'<br>';
 }
 echo '<a href=cmsasem4search2.html>'."Click".'</a>';
