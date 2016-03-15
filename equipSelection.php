<?php
error_reporting(E_ALL^E_DEPRECATED);
$con = mysql_connect("localhost","root"); //connecting to the database
if (!$con)
  {
  die('Could not connect: ' . mysql_error()); //if connection is unsuccessful it give a message 'could not connect'
  }

mysql_select_db("CouncilDatabase", $con);
if (!empty($_REQUEST['term'])) {
$term = mysql_real_escape_string($_REQUEST['term']);    //taken from stack overflow

$sql = "SELECT * FROM equipment WHERE equipment_id LIKE '%".$term."%'";	//getting information from equip table
$r_query = mysql_query($sql);
echo "<table border='1'>  
<tr> 
<th>Equipment ID</th>
<th>Type</th>
<th>Last Inspetion Date</th>
<th>State of Repair</th>
<th>Tradesmen ID</th>

</tr>";
while ($row = mysql_fetch_array($r_query)){ 
 echo "<tr>";
  echo "<td>" . $row['equipment_id'] . "</td>";
  echo "<td>" . $row['type'] . "</td>";
  echo "<td>" . $row['last_inspection_date'] . "</td>";
   echo "<td>" . $row['state_of_repair'] . "</td>";
   echo "<td>" . $row['tradesmen_id']. "</td>";
  echo "</tr>";
}


}
mysql_close($con); //closing connection
?> 