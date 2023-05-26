<html>
<head><title>To insert dta in MYSQL Database</title></head>
<body style="background-color:black;color:gold;font-weight:bold;font-size:25px";>

<h2 style="background-color:red;color:white;text-align:center;">To connect a Database </h1>
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="mscsem2";
$connect=mysqli_connect($servername,$username,$password,$dbname);
if($connect)
{
echo "Database connected successfully"."<br/>";
}
else
{
die("***Database not connected***");
}
?>
<?php
#To add data to STUDENT
$roll=$_POST['roll'];
$name=$_POST['name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$address=$_POST['address'];
$dob=$_POST['dob'];
$sex=$_POST['sex'];
$sql1="INSERT INTO student Values('$roll','$name','$phone','$email','$address','$dob','$sex')";
$result=mysqli_query($connect,$sql1);
if($result)
{
echo " Data added to STUDENT"."<br/>";
}
else
{
die("***Data Insertion failed in STUDENT***");
}
$sql2="SELECT * from student";
$result1=mysqli_query($connect,$sql2);
$nrec=0; //$nrec=number of records
while($row=mysqli_fetch_assoc($result1))
{
$data=$row['roll']." : ".$row['name']." : ".$row['phone']." : "."<br/>";
echo $data;
$nrec++;
}
echo "Number of records added=$nrec"."<br/>";
?>
<pre> <a href="studdata.html">Click to add more data</a>
</body>
</html>