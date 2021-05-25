 
<?php
	session_start();
	if($_SESSION['sid']==session_id())
	{
		require 'dbconfig/config.php';
		require "common.php";
		require "config.php";
   
?>
<!DOCTYPE html>
<html>
<head>
<title>BountyHunter|Home</title>

<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
     
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
     
<link rel="stylesheet" href="css/general.css">
<link rel="stylesheet" href="css/profile2.css">
<link rel="stylesheet" href="css/loader.css">
 
 
 
      
 
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

 

   
 <?php include("dashboard.php"); ?>

	
 
	 
	
	 
    <div class="container emp-profile" >
  
   
     <div class="row">
    <div class="col-lg-12">
        <h1 class="page-header" style="color: black;font-size: 50px; font-family: 'Alfa Slab One';"> Dashboard </h1>
        
        <ol class="breadcrumb">
            <li class="active">
            
                 
            
            </li>
        </ol>
        
    </div>
</div>

<div class="row">
   
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-blue">
            
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                       
                       &nbsp;&nbsp;&nbsp; <i class="fa fa-trophy fa-5x"></i>
                        
                    </div>
                    
                    <div class="col-xs-9 text-right">
                        <div class="huge">
						<?php
						try {
							


							$connection = new PDO($dsn, $username, $password, $options);
        // fetch data code will go here
								
							$sql = "SELECT *
							FROM taskinfo
							WHERE t_userid= :t_userid";

							$t_userid = $_SESSION['t_userid'];

							$statement = $connection->prepare($sql);
							$statement->bindParam(':t_userid', $t_userid, PDO::PARAM_STR);
							$statement->execute(); 

							$result = $statement->fetchAll();
							  } 
						catch(PDOException $error) {
								echo $sql . "<br>" . $error->getMessage();
							  }
							  $count=0;
							  foreach($result as $row)
							  $count++;
							  
							  echo $count;
						?>
						</div>
                           
                        <div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Bounties </div>
                        
                    </div>
                    
                </div>
            </div>
            
            <a href="viewtask.php">
                <div class="panel-footer">
                   
                    <span class="pull-left">
                        View Details 
                    </span>
                    
                    <span class="pull-right"> 
                        <i class="fa fa-arrow-circle-right"></i> 
                    </span> 
                    
                    <div class="clearfix"></div>
                    
                </div>
            </a>
            
        </div>
    </div>
   
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-green">
            
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                       
                       &nbsp;&nbsp;&nbsp;  <i class="fa fa-tasks fa-5x"></i>
                        
                    </div>
                    
                    <div class="col-xs-9 text-right">
                        <div class="huge">
						<?php
						try {
							$connection = new PDO($dsn, $username, $password, $options);
        // fetch data code will go here
								
							$sql = "SELECT *
							FROM taskinfo
							WHERE t_userid= :t_userid AND status='UNDONE'";

							$t_userid = $_SESSION['t_userid'];

							$statement = $connection->prepare($sql);
							$statement->bindParam(':t_userid', $t_userid, PDO::PARAM_STR);
							$statement->execute(); 

							$result = $statement->fetchAll();
							  } 
						catch(PDOException $error) {
								echo $sql . "<br>" . $error->getMessage();
							  }
							  $count=0;
							  foreach($result as $row)
							  $count++;
							  
							  echo $count;
						?>
						</div>
                           
                        <div>&nbsp;&nbsp;  Pending Tasks </div>
                        
                    </div>
                    
                </div>
            </div>
            
            <a href="pendingtask.php">
                <div class="panel-footer">
                   
                    <span class="pull-left">
                        View Details 
                    </span>
                    
                    <span class="pull-right">
                        <i class="fa fa-arrow-circle-right"></i> 
                    </span>
                    
                    <div class="clearfix"></div>
                    
                </div>
            </a>
            
        </div>
    </div>
   
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-orange">
            
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                       
                         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-bullseye fa-5x"></i>
                        
                    </div>
                    
                    <div class="col-xs-9 text-right">
                        <div class="huge">
						<?php
						try {
							


							$connection = new PDO($dsn, $username, $password, $options);
        // fetch data code will go here
								
							$sql = "SELECT *
							FROM huntinfo
							WHERE h_userid= :h_userid";

							$h_userid = $_SESSION['h_userid'];

							$statement = $connection->prepare($sql);
							$statement->bindParam(':h_userid', $h_userid, PDO::PARAM_STR);
							$statement->execute(); 

							$result = $statement->fetchAll();
							  } 
						catch(PDOException $error) {
								echo $sql . "<br>" . $error->getMessage();
							  }
							  $count=0;
							  foreach($result as $row)
							  $count++;
							  
							  echo $count;
						?>
						</div>
                           
                        <div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Hunts </div>
                        
                    </div>
                    
                </div>
            </div>
            
            <a href="viewhunt.php">
                <div class="panel-footer">
                   
                    <span class="pull-left">
                        View Details 
                    </span>
                    
                    <span class="pull-right">
                        <i class="fa fa-arrow-circle-right"></i> 
                    </span>
                    
                    <div class="clearfix"></div>
                    
                </div>
            </a>
            
        </div>
    </div>
   
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-red">
            
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                       
                        &nbsp;&nbsp;&nbsp; <i class="fa fa-tasks fa-5x"></i>
                        
                    </div>
                    
                    <div class="col-xs-9 text-right">
                        <div class="huge">
						<?php
						try {
							


							$connection = new PDO($dsn, $username, $password, $options);
        // fetch data code will go here
								
							$sql = "SELECT huntid,huntinfo.taskid,fname,cntnumber,email,w_desc,date,state,city,money,status FROM huntinfo 
									INNER JOIN taskinfo
									ON huntinfo.taskid=taskinfo.taskid
									INNER JOIN userinfo
									ON taskinfo.t_userid=userinfo.userid
									WHERE h_userid= :h_userid  AND status='UNDONE'";

							$h_userid = $_SESSION['h_userid'];

							$statement = $connection->prepare($sql);
							$statement->bindParam(':h_userid', $h_userid, PDO::PARAM_STR);
							$statement->execute(); 

							$result = $statement->fetchAll();
							  } 
						catch(PDOException $error) {
								echo $sql . "<br>" . $error->getMessage();
							  }
							  $count=0;
							  foreach($result as $row)
							  $count++;
							  
							  echo $count;
						?>
						</div>
                           
                        <div>&nbsp;&nbsp;  Pending Hunts </div>
                        
                    </div>
                    
                </div>
            </div>
            
            <a href="pendinghunt.php">
                <div class="panel-footer">
                   
                    <span class="pull-left">
                        View Details 
                    </span>
                    
                    <span class="pull-right">
                        <i class="fa fa-arrow-circle-right"></i> 
                    </span>
                    
                    <div class="clearfix"></div>
                    
                </div>
            </a>
            
        </div>
    </div>
    
</div>
  </div>
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