<?php
require 'dbconfig/config.php';

		$username=$_POST['username'];
		$pass= $_POST['pass'];
		
		$query="SELECT * FROM userinfo WHERE userid='$username' AND pass='$pass'";
		
		$query_run = mysqli_query($con,$query);
		
		if(mysqli_num_rows($query_run)>0)
		{
			session_start();
			$row = mysqli_fetch_assoc($query_run);
			$_SESSION['username']=$row['userid'];
			$_SESSION['fname']=$row['fname'];
			$_SESSION['lname']=$row['lname'];
			$_SESSION['email']=$row['email'];
			$_SESSION['city']=$row['city'];
			$_SESSION['cntnumber']=$row['cntnumber'];
			$_SESSION['pass']=$row['pass'];
			$_SESSION['t_userid']=$row['userid'];
			$_SESSION['age']=$row['age'];
			$_SESSION['h_userid']=$row['userid'];
			
			$_SESSION['sid']=session_id();
			header('location:homepage.php');
			
		}
		else
		{
			echo '<script type="text/javascript"> alert("Invalid Credentials!") </script>';
?>
<html>
<head>
<title>BountyHunter | Login</title>
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/login.css">


<style>
body{

 			  background-image: url('imgs/pic15.jpg');
			  background-repeat: no-repeat;
			  background-attachment: fixed;
              background-size: cover;
}
::placeholder {
  color: white;
}
</style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
	<div class="container-fluid">
  <a class="navbar-brand" href="project.php"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-gem" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M3.1.7a.5.5 0 0 1 .4-.2h9a.5.5 0 0 1 .4.2l2.976 3.974c.149.185.156.45.01.644L8.4 15.3a.5.5 0 0 1-.8 0L.1 5.3a.5.5 0 0 1 0-.6l3-4zm11.386 3.785l-1.806-2.41-.776 2.413 2.582-.003zm-3.633.004l.961-2.989H4.186l.963 2.995 5.704-.006zM5.47 5.495l5.062-.005L8 13.366 5.47 5.495zm-1.371-.999l-.78-2.422-1.818 2.425 2.598-.003zM1.499 5.5l2.92-.003 2.193 6.82L1.5 5.5zm7.889 6.817l2.194-6.828 2.929-.003-5.123 6.831z"/>
</svg>Bounty Hunter</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup" >
    
    
</div>
</nav>
<br>
<br>
<br>
<br>

	
	<h2 style="color:white; font-size:60px;">
	<center><a href="index.php">Try Again</a></center>
	</h2>
	

	
	 
	
	
	</div>
</body>


</html>


<?php
		}
	
?>