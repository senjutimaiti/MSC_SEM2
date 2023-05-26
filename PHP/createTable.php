<?php
//table_creation.php: Write a program in PHP
//to create a table under cmsasem4 in mysql
$servername='127.0.0.1';
$username='root';
$password='';
$dbname='mscsem2';
echo "<body bgcolor=#000000>";
echo "<font face=times new roman size=6 color=gold>";
$connection=mysqli_connect($servername,$username,$password,$dbname);
if($connection)
    echo "Localhost, Database Connected successfully..."."<br>";
else
    die("**Localhost or Databse Cannot be connected**");
$tablename='emp';
$sql1="CREATE TABLE $tablename(name varchar(30),email varchar(30), mobile varchar(10))";
$result1=mysqli_query($connection,$sql1);
if($result1)
    echo "$tablename created Successfully"."<br>";
else
    echo "***$tablename cannot be created***"."<br>";
?>