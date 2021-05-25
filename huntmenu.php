<?php
	session_start();
	require 'dbconfig/config.php';
	
?> 
<!DOCTYPE html>
<html lang="en">
  <head>
     
    <title>Hunt Menu</title>

    <link rel="stylesheet" href="css/style2.css" />
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<style>
body{

background-image: url(https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80);
background-repeat: no-repeat;
background-attachment: fixed;
background-size: cover;
}
</style>

  </head>

 <body>
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
	<div class="container">
  <a class="navbar-brand" href="#">Bounty Hunter</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  
  <div class="collapse navbar-collapse" id="navbarSupportedContent" >
    
    <ul class="nav navbar-nav navbar-right">
    	<li class="nav-item">
        <a class="nav-link" href="index.php">LOGIN</a>
      </li>
      <li class="nav-item">
       <a class="nav-link" href="register.php">SIGN UP</a>
      </li>
    </ul>
  </div>
</div>
</nav>
<br>
<br>
<br>

	<div id="main-wrapper2">
	<center>
	<h2>
	Hunt Menu
	</h2>
	
	<h3>Hunt new tasks
	<?php 
		echo $_SESSION['username'] 
	?>
	!
	</h3>
	
 </center> 

<form class="myform" action="huntmenu.php" method="post">
	  
         
 
	 <a href=" hunttask.php"><input type="button" id="newt_btn" value="Hunt Task"  /> 

	 <a href="viewhunt.php"><input type="button" id="viewh_btn" value="Hunt History" style="float: right;/> 
         
 

	<input name="logout" type="submit" id="logout_btn" value="Logout" style="float: center;" /> 
	</form> 
<a href="dashboard.php"><input type="button" id="home_btn" value="Home"  /> 
 </body>
</html>
 
 

 