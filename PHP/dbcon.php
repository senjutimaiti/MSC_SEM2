<?php
    //database_connection.php: Write a program in PHP to connect to a database in mysql
    $servername='127.0.0.1';
    $username='root';
    $password='';
    echo "<body bgcolor=#000000>";
    echo "<font face=times new roman size=7 color=gold>";
    $connection = mysqli_connect($servername,$username,$password);
    if($connection){
        echo "<b>Arre waah...Localhost Connected successfully :-)</b>"."<br>";
    } else {
        die("Jaah...Localhost Cannot be connected :-(");
    }
?>