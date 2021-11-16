<!--we need to connect from the database so that we nned to import config .phph file-->
 <?php
 
 
 include_once ('config.php');
 $query = "select * from insertcabs";
  
 //execute the sql query and output save inside this result variable
 $result = mysqli_query($conn,$query);
 ?>
 

<!DOCTYPE html>
<html>
<head>

<title>Display</title>
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" type="text/css" href="style/styles3.css">
	  <link rel="stylesheet" type="text/css" href="style/styles4.css">
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	 
</head>
<body>

<div class="header">
   <div>
	<img src="images/logo.png" alt="logo" class="logo">
	</div>
	<div class="buttons">
	<button class="button">Login</button>
	<button class="button">Sign up</button>
	</div>
    </div>
	
<div id="navbar">
      <a href="">Home</a>
	  <a href="">Book a ride</a>
      <a href="">Contact us</a>
	  <a href="">About us</a>
	  <a href="">Carriers</a>
	  <a href="">Promo</a>
	  <a href="user account.html">User account</a>
	  <a class="active" href="">Join with us</a>
	  <a href="">Feedback</a>
	  </div>	
	  
	 
	  
	  
	  <br><br><br><br>
	  

<table align="center" border="1px" style="width:700px; line-height:50px;">

   <tr>
   <!-- add the database values to this table -->
       <th colspan="8"><h2>Driver Records</h2></th>
	   
	   </tr>
	   <!--headeer colomn-->
	   
	       <th>ID</th>
		   <th>First Name</th>
		   <th>Last Name</th>
		   <th>NIC no</th>
		   <th>Mobile no</th>
		   <th>Brand</th>
		   <th>Model</th>
		   <th>Vehicle no</th>
		   
		   
		   <?php
		   
		   while($rows=mysqli_fetch_assoc($result))
		   {
			   ?>
			   <tr>
			      <td><?php echo $rows['id']; ?></td>
				  <td><?php echo $rows['firstname']; ?></td>
				  <td><?php echo $rows['lastname']; ?></td>
				  <td><?php echo $rows['nicnum']; ?></td>
				  <td><?php echo $rows['mobilenum']; ?></td>
				  <td><?php echo $rows['brand']; ?></td>
				  <td><?php echo $rows['model']; ?></td>
				  <td><?php echo $rows['vehiclenum']; ?></td>

                </tr>
			<?php	  
		   }
		   ?>
		   </table>
		   
		   
		   <br><br>
		   <footer class="footer">
    
	<a href="https://google.com">Privacy Policy</a>&nbsp&nbsp		
	<a href="https://google.com">Terms & Conditions    </a>&nbsp&nbsp		
	<a href="https://google.com">Contact us</a>&nbsp&nbsp	
	<a href="https://google.com">About us</a>&nbsp&nbsp	
       
	     <hr class="bottom">
		 
	<a href="https://www.facebook.com/" class="fa fa-facebook"></a>
	<a href="https://twitter.com/" class="fa fa-twitter"></a>
	<a href="https://lk.linkedin.com/" class="fa fa-linkedin"></a>
	<a href="https://www.youtube.com/" class="fa fa-youtube"></a>
	<a href="https://www.instagram.com/" class="fa fa-instagram"></a>
	<br/><br/>
   </footer>
	   
	   
</body>

</html>