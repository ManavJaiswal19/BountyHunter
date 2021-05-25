<?php 
session_start();
	if($_SESSION['sid']==session_id())
	{
		require 'dbconfig/config.php';
		require "templates/header2.php";
		
if (isset($_POST['submit'])) {
  try {
    require "common.php";
	require "config.php";

    $connection = new PDO($dsn, $username, $password, $options);
        // fetch data code will go here
    
$sql = "SELECT *
FROM taskinfo
WHERE t_userid !='{$_SESSION['username']}' AND state=:state AND city = :city AND status='UNDONE'";

$city = $_POST['city'];
$state= $_POST['state'];

$statement = $connection->prepare($sql);
$statement->bindParam(':city', $city, PDO::PARAM_STR);
$statement->bindParam(':state', $state, PDO::PARAM_STR);
$statement->execute();

$result = $statement->fetchAll();
  } catch(PDOException $error) {
    echo $sql . "<br>" . $error->getMessage();
  }
}
?>
<center><h2 style="color: white;font-size: 50px; font-family: 'Alfa Slab One';text-align: left;">Hunt New Tasks</h2><br> 
</center>
<?php
if (isset($_POST['submit'])) {
  if ($result && $statement->rowCount() > 0) { ?>
    <h6 style="color: white;">Results for <?php echo escape($_POST['city']); ?></h6>

<style>
table {
  border-collapse: collapse;
  width: 100%;
  background-color:white;
}

th, td {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}

tr:hover {background-color:#f5f5f5;}

th {
  background-color: #00008B;
  color: white;
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
    <table>
      <thead>
<tr>
  <th>Task ID</th>
  <th>User ID</th>  
  <th>Work desription</th>
  <th>Date</th>
  <th>State</th>
  <th>City</th>
  <th>Money</th>
   
</tr>
      </thead>
      <tbody>
  <?php foreach ($result as $row) { ?>
      <tr>
<td><?php echo escape($row["taskid"]); ?></td>
<td><?php echo escape($row["t_userid"]); ?></td>
 <td><?php echo escape($row["w_desc"]); ?></td>
<td><?php echo escape($row["date"]); ?></td>
<td><?php echo escape($row["state"]); ?></td>
<td><?php echo escape($row["city"]); ?></td>
<td><?php echo escape($row["money"]); ?></td>
 
      </tr>
    <?php } ?>
      </tbody>
  </table>
<br> <div class="card" style="width: 100%;  color: white; background-color: grey;background-repeat: no-repeat;background-attachment: fixed;
background-size: cover; ">

  <!-- Card body -->
  <div class="card-body">
<form class="myform" method="post" style="color: white;">
  <h6><b>Select the task you want to hunt</b></h6>
       
 
       
      <input type="text" id="taskid" name="taskid" class="form-control" placeholder="Enter Task ID you want to hunt"    /> <br>
        <input type="submit" name="add"class="button b2" value="Hunt this task">
      </b></label>

    </form>
     </div>
  </div>   <br><br>
  <?php } else { ?>

       
  <b> > No results found for <?php echo escape($_POST['city']); ?>.
  <?php }
} ?>



<?php
if (isset($_POST['add'])) {
  require "config.php";
  require "common.php";

   $connection = new PDO($dsn, $username, $password, $options);

 $sql = 
   "INSERT INTO huntinfo (taskid,h_userid) values ('".$_POST['taskid']."','{$_SESSION['username']}')";
    

 $statement = $connection->prepare($sql);
$statement->execute();
 
 
 
}

?>
 
<?php if (isset($_POST['add']) && $statement) { ?>Task ID <?php echo escape($_POST['taskid']); ?> successfully added. <?php } ?>
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




<div class="card" style="width: 100%;  color: white; background-color: grey;background-repeat: no-repeat;background-attachment: fixed;
background-size: cover; ">

  <!-- Card body -->
  <div class="card-body">

     <form class="myform" method="post" style="color: white;">
<center><h3>Search tasks</h3></center>
<div class="md-form">
      <label><b>State:</label><br>
      <select name="state" class="form-control" id="countrySelect" size="1" onchange="makeSubmenu(this.value)">
<option value="" disabled selected>Choose State</option>
<option>Odisha</option>
<option>Maharashtra</option>
<option>TamilNadu</option>
</select>
</div>
<div class="md-form">
      <label><b>City:</label><br>
      <select name="city" class="form-control" id="citySelect" size="1" >
<option value="" disabled selected>Choose City</option>
<option></option>
</select>
</div>
<div class="md-form">
     <br> <input type="submit" name="submit" value="View Results" class="button b1"><br><br>
</div> 
    </form>

  </div>
  </div>   

   </body>
</html>

<?php
	}
	else
		header("location:index.php");
	
?>