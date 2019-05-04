<?php
include('connection.php');
$q=$_GET["q"];

$sql="SELECT * FROM sub_category_tb WHERE c_id = '$q'";

$result =$con->query($sql);
?>
 <select>
					  <?php 
foreach($result as $row)
  {
  
  echo "<option  value=$row[s_id]>" . $row['s_name'] .  "</option>";
  }
  ?>
</select>



					<?php
mysqli_close($con);
?> 
