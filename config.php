<?php
// localhost,root assinging some  values to this php variable
$servername = "localhost";//we have seperate database in the localhost in our machine
$username = "root";
$password = "";
$db = "cabme";
// Create connection
//$conn is the connection object ,this is also a kind of variable
//from mysqli function it will create the database connection object by passing this servername,username,password
// after passing the servername,username and the password into mysqli function 
//then it will create a new object and that object saved inside this $conn variable
$conn = new mysqli($servername, $username, $password,$db);
// Check connection

//now we are checking in the connection object  have any error or not
if ($conn->connect_error) {
	//if there have any error then it will pop up an error msg as connection failed.
 die("Connection failed: " . $conn->connect_error);
}

	echo "connected successfully..";
	




?>