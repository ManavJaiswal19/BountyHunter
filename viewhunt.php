<?php 
 session_start();
	if($_SESSION['sid']==session_id())
	{
		require 'dbconfig/config.php';
		
  try {
	  require "config.php";
    require "common.php";

    $connection = new PDO($dsn, $username, $password, $options);
        // fetch data code will go here
    
$sql = "SELECT huntid,huntinfo.taskid,fname,cntnumber,email,w_desc,date,state,city,money,status FROM huntinfo 
INNER JOIN taskinfo
ON huntinfo.taskid=taskinfo.taskid
INNER JOIN userinfo
ON taskinfo.t_userid=userinfo.userid
WHERE h_userid= :h_userid  ";

$h_userid = $_SESSION['h_userid'];

$statement = $connection->prepare($sql);

$statement->bindParam(':h_userid', $h_userid, PDO::PARAM_STR);
$statement->execute(); 

$result = $statement->fetchAll();
  } catch(PDOException $error) {
    echo $sql . "<br>" . $error->getMessage();
  }

?>
<?php require "templates/header3.php"; ?>
<h2 style="color: white;font-size: 50px; font-family: 'Alfa Slab One';text-align: left;">Hunt History</h2>
<?php
  if ($result && $statement->rowCount() > 0) { ?>
    <h6 style="color: white;">Results for <?php echo escape($_SESSION['h_userid']); ?></h6>

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
  <th>Hunt ID</th>
  <th>Task ID</th>
  <th>fname</th>
  <th>cntnumber</th>
  <th>email</th>
  <th>w_desc</th>
  <th>date</th>
  <th>city</th>
  <th>money</th>
  <th>status</th> 
</tr>
      </thead>
      <tbody>
  <?php foreach ($result as $row) { ?>
      <tr>
<td><?php echo escape($row["huntid"]); ?></td>
<td><?php echo escape($row["taskid"]); ?></td>
<td><?php echo escape($row["fname"]); ?></td>
<td><?php echo escape($row["cntnumber"]); ?></td>
<td><?php echo escape($row["email"]); ?></td>
<td><?php echo escape($row["w_desc"]); ?></td>
<td><?php echo escape($row["date"]); ?></td>
<td><?php echo escape($row["city"]); ?></td>
<td><?php echo escape($row["money"]); ?></td>
<td><?php echo escape($row["status"]); ?></td>
 
      </tr>
    <?php } ?>
      </tbody>
  </table><br>
  <?php } else { ?>
  > No results found for <?php echo escape($_SESSION['h_userid']); }?>.
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
	include "templates/footer2.php"; 
	}
	else
		header("location:index.php");
	?>