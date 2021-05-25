<?php
    require 'dbconfig/config.php';
    
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title></title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="css/stylecss.css">
    <link href='https://fonts.googleapis.com/css?family=Alfa Slab One' rel='stylesheet'>


    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
     
     <style>
body{

background-image: url(imgs/pic12.jpg);
background-repeat: no-repeat;
background-attachment: fixed;
background-size: cover;
}
</style>
</head>

<body>

<div class="wrapper">
     

    <nav id="sidebar">
        <div class="sidebar-header">


           <center> <a class="navbar-brand" href="homepage.php" style="font-size: 30px "> <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-gem" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M3.1.7a.5.5 0 0 1 .4-.2h9a.5.5 0 0 1 .4.2l2.976 3.974c.149.185.156.45.01.644L8.4 15.3a.5.5 0 0 1-.8 0L.1 5.3a.5.5 0 0 1 0-.6l3-4zm11.386 3.785l-1.806-2.41-.776 2.413 2.582-.003zm-3.633.004l.961-2.989H4.186l.963 2.995 5.704-.006zM5.47 5.495l5.062-.005L8 13.366 5.47 5.495zm-1.371-.999l-.78-2.422-1.818 2.425 2.598-.003zM1.499 5.5l2.92-.003 2.193 6.82L1.5 5.5zm7.889 6.817l2.194-6.828 2.929-.003-5.123 6.831z"/>
</svg>Bounty Hunter </a></center>
        </div>

        <ul class="list-unstyled components">
            <p style="font-size: 20px"><i class="fa fa-rocket"></i> &nbsp;&nbsp;Welcome
    <?php 
        echo $_SESSION['fname'] 
    ?>
    !</p>
            
            <li>
                <a href="homepage.php"><i class="fa fa-home"></i>&nbsp;&nbsp;Home</a>
            </li>
            <li>
                <a href="#profileSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-user" ></i>&nbsp;&nbsp;Profile</a>
                <ul class="collapse list-unstyled" id="profileSubmenu">
                    <li>
                        <a href="profile.php"><i class="fa fa-eye" ></i>&nbsp;&nbsp;View Profile</a>
                    </li>
                    <li>
                        <a href="updateprofile.php"><i class="fa fa-wrench" ></i>&nbsp;&nbsp;Update Profile</a>
                    </li>
                    
                </ul>
            </li>
            <li>
                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-trophy" ></i>&nbsp;&nbsp;Bounty</a>
                <ul class="collapse list-unstyled" id="homeSubmenu">
                    <li>
                        <a href="addtask.php"><i class="fa fa-clipboard" ></i>&nbsp;&nbsp;Post New Task</a>
                    </li>
                    <li>
                        <a href="viewtask.php"><i class="fa fa-history" ></i>&nbsp;&nbsp;History</a>
                    </li>
                    
                </ul>
            </li>
            <li>

                <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-bullseye"></i>&nbsp;&nbsp;Hunt</a>
<ul class="collapse list-unstyled" id="pageSubmenu">
    <li>
        <a href="hunttask.php"><i class="fa fa-cart-plus"></i>&nbsp;&nbsp;Hunt New Tasks</a>
    </li>
    <li>
        <a href="viewhunt.php"><i class="fa fa-history" ></i>&nbsp;&nbsp;History</a>
    </li>
     
</ul>
            </li>
            <li>
                <a href="gethunterinfo.php"><i class="fa fa-tasks"></i>&nbsp;&nbsp;Manage Tasks</a>
            </li>
            <li>
                <a href="logout.php"><i class="fa fa-fw fa-power-off"></i>&nbsp;&nbsp;Log Out</a>
            </li>
        </ul>

    </nav>
 

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

</body>

</html>