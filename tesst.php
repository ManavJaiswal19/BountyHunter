<?php
	session_start();
	require 'dbconfig/config.php';

   
?>
<!DOCTYPE html>
<html>
<head>
<title>Sign Up</title>
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

<link rel="stylesheet" href="css/ss.css">
 
<!--
<script type="text/javascript">

	function PreviewImage()
	{
		var oFReader = new FileReader();
		oFReader.readAsDataURL(document.getElementById("imglink").files[0]);
		
		oFReader.onload = function (oFREvent)
		{
			document.getElementById("uploadPreview").src = oFREvent.target.result;
		};
	};
	
</script>

-->
<style>
body{

background-image: url('imgs/pic1.jpeg');
background-repeat: no-repeat;
background-attachment: fixed;
background-size: cover;
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

	
	
	<div>
	<?php
		if(isset($_POST['signup_btn']))
		{
			//echo '<script type="text/javascript"> alert("Form Submitted Successfully") </script>';
			
			$fname = $_POST['fname'];
			$lname = $_POST['lname'];
			$age = $_POST['age'];
			$gen = $_POST['gender'];
			$cntnumber = $_POST['cntnumber'];
			$email = $_POST['email'];
			$aadhar = $_POST['aadhar'];
			
			$userid = $_POST['userid'];
			$pass = $_POST['pass'];
			$cpass =$_POST['cpass'];
			
			 
			
			if($pass==$cpass)
			{
				$query= "SELECT * FROM userinfo WHERE userid= '$userid' ";
				
				$query_run=mysqli_query($con,$query);
				 
				if(mysqli_num_rows($query_run)>0)
				{
						echo '<script type="text/javascript"> alert("Username already exists,try another name") </script>';
				}

				
				 
				else
                                { 
				 
					$query="INSERT INTO userinfo VALUES('$fname','$lname','$age','$gen','$cntnumber','$email','$aadhar','$userid','$pass' )";
					$query_run= mysqli_query($con,$query);
					
					if($query_run)
					{
						echo '<script type="text/javascript"> alert("User Registered!Go to Login page to login!") </script>';
					}
					else
					{
						echo '<script type="text/javascript"> alert("Error!") </script>';
					}
					
					
					
					
				}
			}
			else{
				echo '<script type="text/javascript"> alert("Error!Password and confirm password do not match!") </script>';
		
			}
		
		}
	
	
	?>
	</div>
	
	<div class="signup__container">
  <div class="container__child signup__thumbnail">
    <div class="thumbnail__logo">
       
       
    </div>
    <div class="thumbnail__content text-center">
      <h1 class="heading--primary">Welcome to <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-gem" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M3.1.7a.5.5 0 0 1 .4-.2h9a.5.5 0 0 1 .4.2l2.976 3.974c.149.185.156.45.01.644L8.4 15.3a.5.5 0 0 1-.8 0L.1 5.3a.5.5 0 0 1 0-.6l3-4zm11.386 3.785l-1.806-2.41-.776 2.413 2.582-.003zm-3.633.004l.961-2.989H4.186l.963 2.995 5.704-.006zM5.47 5.495l5.062-.005L8 13.366 5.47 5.495zm-1.371-.999l-.78-2.422-1.818 2.425 2.598-.003zM1.499 5.5l2.92-.003 2.193 6.82L1.5 5.5zm7.889 6.817l2.194-6.828 2.929-.003-5.123 6.831z"/>
</svg>Bounty Hunter.</h1>
      <h2 class="heading--secondary">Are you ready to join the force?</h2>
    </div>
    <div class="thumbnail__links">
      <ul class="list-inline m-b-0 text-center">
        <i class="fa fa-globe"></i>&nbsp;&nbsp;
        <fa class="fa fa-behance"></fa>&nbsp;&nbsp;
        <i class="fa fa-github"></i>&nbsp;&nbsp;
        <i class="fa fa-twitter"></i> 
      </ul>
    </div>
    <div class="signup__overlay"></div>
  </div>
  <div class="container__child signup__form">
    <form   action="tesst.php" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label for="name">Name</label>
        <input class="form-control" type="text" name="name" id="name" placeholder="Enter your Name" required />
      </div>
      <div class="form-group">
        <label for="username">Username</label>
        <input class="form-control" type="text" name="userid" id="username" placeholder="Enter your Username" required />
      </div>
      
      <div class="form-group">
        <label for="email">Email</label>
        <input class="form-control" type="text" name="email" id="email" placeholder="Enter your Email" required />
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input class="form-control" type="password" name="pass" id="password" placeholder="********" required />
      </div>
      <div class="form-group">
        <label for="passwordRepeat">Repeat Password</label>
        <input class="form-control" type="password" name="cpass" id="passwordRepeat" placeholder="********" required />
      </div>
      <div class="m-t-lg">
        <ul class="list-inline">
          <li>
            <input class="btn btn--form"  name="signup_btn" type="submit" value="Register" /><br>
          </li>
          <li>
            <a class="signup__link" href="index.php">I am already a member</a>
          </li>
        </ul>
      </div>
    </form>  
  </div>
</div>
	
	
	
	
	
	</div>
</body>


</html>