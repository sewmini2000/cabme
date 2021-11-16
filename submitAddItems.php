 <?php
 
 //import config.php file into submitAddItem file
 include_once 'config.php';
 ?>
 
 
 <?php
 //we need to get the user inputed values into seperate variables.using the html feilds names we access the user inputed values true the post method.
    $fname = $_POST["fname1"];
    $lname = $_POST["lname1"];
    $nic = $_POST["nic1"];
    $mobileno = $_POST["mobileno1"];
    $brand = $_POST["brand1"];
    $model = $_POST["model"];
    $vehicleno = $_POST["vehicleno"];
	
	
	//we need to send this data into the database for that we need to create a query.

//insert into insertcabs table .then pass the databse column names.user inputed values are saved in the variable id is a auto incremented values so that we dont need to pass that value .

//after that we need to save the insert query inside the sql variable and then it will be saved as a string value.

//this sql variable holds a query string.
	$sql = "insert into insertcabs(	id,firstname,lastname,nicnum,mobilenum,brand,model,vehiclenum)values('','$fname','$lname','$nic','$mobileno','$brand','$model','$vehicleno')";
 
 
 //after that we need execute the query so that there have a function called mysqli_query
 
 
 //from that finction we need pass connection object and then the query string
    if(mysqli_query($conn,$sql)){
		//if this function execute successfully it print a alert 
		echo"<script>alert ('details sent successfully')</script>";
		
	}
	else{
		echo "<script>alert ('Error in inserting records')</script>";
	}
	
	//after that it will redirect to the join.html webpage
	header("Location:join.html"); 
	echo"alert ('Feedback insterd successfully')";
	//we need to close the connection object
	mysqli_close($conn);
?> 