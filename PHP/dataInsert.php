<?php
//insert_data.php: Write a program in PHP to insert data in  a table under mscsem2 in mysql
$servername='127.0.0.1';
$username='root';
$password='';
$dbname='mscsem2';
$tablename='emp';
$name=$_POST['name'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];

echo "<body bgcolor=#000000>";
echo "<font face=times new roman size=6 color=orange>";
$connection=mysqli_connect($servername,$username,$password,$dbname);
if($connection)
    echo "Localhost, database  Connected successfully..."."<br>";
else
    die("**Localhost or databse  Cannot be connected**");
$sql1 = "INSERT INTO emp VALUES('$name','$email','$mobile')";
$result1=mysqli_query($connection,$sql1);
if($result1)
    echo "Data inserted sucessfully"."<br>";
else
    echo "***Data cannot be added***"."<br>";
?>