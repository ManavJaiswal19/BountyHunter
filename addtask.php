 <?php

session_start();
	if($_SESSION['sid']==session_id())
	{
		require 'dbconfig/config.php';
		include "templates/header.php";
		
if (isset($_POST['submit'])) {
  require "config.php";
  require "common.php";

   $connection = new PDO($dsn, $username, $password, $options);

 $sql = 
    "INSERT INTO taskinfo (t_userid,w_desc,date,state,city,money) values ('{$_SESSION['username']}','".$_POST['w_desc']."','".$_POST['date']."','".$_POST['state']."','".$_POST['city']."','".$_POST['money']."')";
    

 $statement = $connection->prepare($sql);
$statement->execute();
 
 
 


?>

 
<?php echo "  Task successfully added.";
} 
?>

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


      <center><h2 style="color: white;font-size: 50px; font-family: 'Alfa Slab One';text-align: left;"> 
  Add new task
  </h2> </center>

  <div class="card" style="width: 100%;  color: white; background-color:  grey;background-repeat: no-repeat;background-attachment: fixed;
background-size: cover; ">

  <!-- Card body -->
  <div class="card-body">
    <br><br><form class="myform" action="addtask.php" method="post"     enctype="multipart/form-data" style="color: white;">

    	  
    	 <div class="md-form">
        <label><b>Work Description:</label><br>
    	<input name="w_desc" type="text" id="materialFormCardNameEx" class="form-control" placeholder="Describe the task"  required/>
          </div>
          

 <div class="md-form">
        <label><b>Date:</label><br>
        <input type="date" id="materialFormCardNameEx" class="form-control" name="date" required> 
</div>
        <label><b>State: </b> </label>  
   
    <div class="md-form">
   <select name="state" class="form-control" id="countrySelect" size="1" onchange="makeSubmenu(this.value)">
<option value="" disabled selected>Choose State</option>
<option>Odisha</option>
<option>Maharashtra</option>
<option>TamilNadu</option>
<option>UttarPradesh</option>
<option>WestBengal</option>
<option>Rajasthan</option>
</select>
</div>

       <label><b>City: </b> </label>  
	 <div class="md-form">
<select name="city" class="form-control" id="citySelect" size="1" >
<option value="" disabled selected>Choose City</option>
<option></option>
</select>
</div>


     	<label><b>Money: </b> </label>  
     <div class="md-form">
	<input name="money" type="text" class="form-control"                         placeholder="Enter payment amount"  required /> <br>
</div>
    	 
    	<br><input type="submit" name="submit" id="sub_btn" value="Submit" class="button b1"   ><br><br>
     
  
 
</form>



    

</div></div>
</div></div>
<br><br> 
 

 
    <?php
		include "templates/footer.php"; 
	}
	else
		header("location:index.php");
	?>