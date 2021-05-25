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
    
$sql = "SELECT taskinfo.taskid,userid,fname,cntnumber,email,w_desc,date,status
FROM taskinfo
INNER JOIN userinfo
ON taskinfo.t_userid=userinfo.userid
WHERE t_userid= :t_userid  ";

 
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
     <center><h2 style="color: white;font-size: 50px; font-family: 'Alfa Slab One'; text-align: left;">Manage Tasks</h2> </center> 

<?php
  if ($result && $statement->rowCount() > 0) { ?>
    <br><h6 style="color: white;">Results for <?php echo escape($_SESSION['t_userid']); ?></h6>

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
  color: black;
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
  <th>task ID</th>
  <th>UserID</th>
  <th>fname</th>
  <th>cntnumber</th>
  <th>email</th>
  <th>w_desc</th>
  <th>date</th>
  <th>status</th>
</tr>
      </thead>
      <tbody>
  <?php foreach ($result as $row) { ?>
      <tr>
<td><?php echo escape($row["taskid"]); ?></td>
<td><?php echo escape($row["userid"]); ?></td>
<td><?php echo escape($row["fname"]); ?></td>
<td><?php echo escape($row["cntnumber"]); ?></td> 
<td><?php echo escape($row["email"]); ?></td> 
<td><?php echo escape($row["w_desc"]); ?></td> 
<td><?php echo escape($row["date"]); ?></td> 
<td><?php echo escape($row["status"]); ?></td> 
      </tr>
    <?php } ?>
      </tbody>
  </table>
 
    
<div class="card" style="width: 100%;  color: white; background-color: grey;background-repeat: no-repeat;background-attachment: fixed;
background-size: cover; ">

  <!-- Card body -->
  <div class="card-body">
    <br> <form class="myform" action="gethunterinfo.php" method="post"  style="color: white;"   enctype="multipart/form-data">
 <div class="md-form">
  <label><b>Modify Task Status</label><br>
         <label><b>Task ID:</label><br>
      <input name="taskid" type="text"  class="form-control" placeholder="Enter task ID"  required/>
         <br> 
</div>
       
       <input type="submit" name="add" class="button b1" value="Change">
    </form>

 </div>
</div>   <br>
  <?php } else { ?>
  > No results found for <?php echo escape($_POST['t_userid']); }?>


<?php
if(isset($_POST['add']))
{
  require "config.php";

  try {
    $connection = new PDO($dsn, $username, $password, $options);
    // insert new user code will go here
    $new_hunt = array(
    "taskid"    => $_POST['taskid'],
     
);

$sql ="UPDATE taskinfo
       SET status='DONE'
       where taskid= :taskid" ; 

$statement = $connection->prepare($sql);
$statement->execute($new_hunt);
 
 } catch(PDOException $error) {
    echo $sql . "<br>" . $error->getMessage();
  }

?>
 
<?php if ($statement) { ?>Status of Task ID
  <?php echo escape($_POST['taskid']); ?> successfully changed.
<?php } 
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
    

  

  


  
  <?php
	include "templates/footer.php";
	}
	else
			header("location:index.php");

	?>