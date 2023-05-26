<?php
//database_creation.php: Write a program in PHP to create a database in mysql
$servername='127.0.0.1';
$username='root';
$password='';
echo "<body bgcolor=#000000>";
echo "<font face=times new roman size=6 color=gold>";
$connection=mysqli_connect($servername,$username,$password);
if($connection)
    echo "Localhost Connected successfully..."."<br>";
else
    die("**Localhost Cannot be connected**");
$dbname='mscsem2';
$sql1="CREATE DATABASE $dbname";
$result1=mysqli_query($connection,$sql1);
if($result1)
    echo "$dbname created Successfully"."<br>";
else
    echo "***$dbname cannot be created***"."<br>";
?>