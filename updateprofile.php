<?php
	session_start();
	if($_SESSION['sid']==session_id())
	{
		require 'dbconfig/config.php';
		include "templates/header.php";
?>
<!DOCTYPE html>
<html>
<head>
<title>BountyHunter|Home</title>

<meta charset="UTF-8">
  
 
      
 
<style>
body{

background-image: url('imgs/pic1.jpeg');
background-repeat: no-repeat;
background-attachment: fixed;
background-size: cover;
}
</style>
<style type="text/css">
  .button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}
</style>
</head>
  

<body>
  

	
	
	 
	
	  <center><h2 style="color: white;font-size: 50px; font-family: 'Alfa Slab One';text-align: left;"> 
  Update Profile
  </h2> </center>

  <div class="card" style="width: 100%;  color: white; background-color:  grey;background-repeat: no-repeat;background-attachment: fixed;
background-size: cover; ">

  <!-- Card body -->
  <div class="card-body">

<form   action="updateprofile.php" class="myform" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label for="username">Name</label>
        <input class="form-control" type="text" name="name" id="name" placeholder="Enter your name" required />
      </div>
      
      <div class="form-group">
        <label for="email">Email</label>
        <input class="form-control" type="text" name="email" id="email" placeholder="Enter your Email" required />
      </div>
      <div class="form-group">
        <label for="age">Age</label>
        <input class="form-control" type="number" name="age" id="age" placeholder="Enter your age" required />
      </div>
      <div class="form-group">
        <label for="cntnumber">Mobile No.</label>
        <input class="form-control" type="Number" name="cntnumber" id="cntnumber" placeholder="Enter mobile no." required />
      </div>
      <div class="form-group">
        <label for="State">State</label>
        <input class="form-control" type="text" name="state" id="state" placeholder="Enter State name" required />
      </div>
      <div class="form-group">
        <label for="city">City</label>
        <input class="form-control" type="text" name="city" id="city" placeholder="Enter city name" required />
      </div>
      <div class="form-group">
        <label for="pic">Profile Pic</label>
        <input class="form-control" type="file" name="pic" id="pic" placeholder="Enter city name" required />
      </div>
      <div class="md-form">
        <ul class="list-inline">
          <li>
            <input class="button b1"     name="signup_btn" type="submit" value="Update" /><br>
          </li>
           
        </ul>
      </div>
    </form>  
  </div>
</div>
	
	
	
	
	
	</div>
</body>


</html>

<?php
	}
else
	header("location:index.php");
?>