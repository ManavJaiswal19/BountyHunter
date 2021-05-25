<?php 
 session_start();
	if($_SESSION['sid']==session_id())
	{
		require 'dbconfig/config.php';
		
  try {
    require "common.php";
	require "config.php";


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
  } catch(PDOException $error) {
    echo $sql . "<br>" . $error->getMessage();
  }

?>
<?php require "templates/header.php"; ?>
 <center><h2 style="color: white;font-size: 50px; font-family: 'Alfa Slab One';text-align: left;">Bounty History</h2></center> <br>
<?php
  if ($result && $statement->rowCount() > 0) { ?>
    <h6>Results for <?php echo escape($_SESSION['t_userid']); ?></h6>

<style>
table {
  border-collapse: collapse;
  width: 100%;
  background-color: white;
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
    <table>
      <thead>
<tr>
  <th>task ID</th>
  <th>Work description</th>
  <th>State</th>
  <th>City</th>
  <th>Money</th>
  <th>Status</th>
</tr>
      </thead>
      <tbody>
  <?php foreach ($result as $row) { ?>
      <tr>
<td><?php echo escape($row["taskid"]); ?></td>
<td><?php echo escape($row["w_desc"]); ?></td>
<td><?php echo escape($row["state"]); ?></td>
<td><?php echo escape($row["city"]); ?></td>
<td><?php echo escape($row["money"]); ?></td>
<td><?php echo escape($row["status"]); ?></td> 
      </tr>
    <?php } ?>
      </tbody>
  </table><br>
  <?php } else { ?>
    > No results found for <?php echo escape($_SESSION['t_userid']); ?>.
  <?php } ?>
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
    

    
   
 
    <?php 
	include "templates/footer.php"; 
	}
	else
		header("location:index.php");
	?>