<?php
error_reporting(E_ALL^E_DEPRECATED);
$con = mysql_connect("localhost","root"); //connecting to the database
if (!$con)
  {
  die('Could not connect: ' . mysql_error()); //if connection is unsuccessful it give a message 'could not connect'
  }

mysql_select_db("CouncilDatabase", $con); //tells which database that you want to work with
mysql_select_db("council", $con); //tells which database that you want to work with

$result = mysql_query("SELECT * FROM equipment"); //getting information from emp table

echo "<table border='1'>  
<tr> 
<th>Equipment ID</th>
<th>Type</th>
<th>Last Inspetion Date</th>
<th>State of Repair</th>
<th>Tradesmen ID</th>

</tr>";

while($row = mysql_fetch_array($result)) //this creates a loop 
  {
  echo "<tr>";
  echo "<td>" . $row['equipment_id'] . "</td>";
  echo "<td>" . $row['type'] . "</td>";
  echo "<td>" . $row['last_inspection_date'] . "</td>";
   echo "<td>" . $row['state_of_repair'] . "</td>";
   echo "<td>" . $row['tradesmen_id']. "</td>";
  echo "</tr>";
  }
echo "</table>";

mysql_close($con); //closing connection
?> 