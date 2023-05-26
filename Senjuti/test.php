<?php
	//database connection
	$host="localhost";
	$dbname="test";
	$pawssword="";
	$username="root";
	$conn=new mysqli($host,$username,$password,$dbname);
	if($conn->connect_error){
        die("Connection Error". $conn->connect_error);
    }


	$name=$_POST["name"];
	$number=$_POST["number"];
	//insert 
	$sql="INSERT INTO user VALUES('$name','number')";
	if(mysqli_query($conn,$sql)){
		echo "Insertion success";
	}
	//select 
	$sql1="SELECT * FROM test"
	$result=mysqli_query($conn,$sql1);
	foreach ($result as $row){
		echo $row["name"];
		echo $row["number"];
	}
?>