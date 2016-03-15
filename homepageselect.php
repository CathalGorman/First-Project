<?php
error_reporting(E_ALL^E_DEPRECATED);
$con = mysql_connect("localhost","root"); //connecting to the database
if (!$con)
  {
  die('Could not connect: ' . mysql_error()); //if connection is unsuccessful it give a message 'could not connect'
  }

mysql_select_db("CouncilDatabase", $con);
$term = mysql_real_escape_string($_REQUEST['term']); 
if ($term == 'equipment') {
   //taken from stack overflow

$sqla = "SELECT * FROM equipment";	//getting information from requested tables
$r_query = mysql_query($sqla);


echo "<table border='1'>  
<tr> 
<th>Equipment ID</th>
<th>Type</th>
<th>Last Inspetion Date</th>
<th>State of Repair</th>
<th>Tradesmen ID</th>

</tr>";
while ($row = mysql_fetch_array($r_query))



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
}else if ($term == 'tenants') {
   

$sql = "SELECT * FROM tenants";	//getting information from requested tables
$r_query = mysql_query($sql);


echo "<table border='1'>  
<tr> 
<th>Tenant ID</th>
<th>Tenant Name</th>
<th>Reg No.</th>
<th>Address</th>
<th>Phone</th>
<th>E-mail</th>

</tr>";
while ($row = mysql_fetch_array($r_query))



 {
  echo "<tr>";
  echo "<td>" . $row['tenant_id'] . "</td>";
  echo "<td>" . $row['tenant_name'] . "</td>";
  echo "<td>" . $row['registration_Number'] . "</td>";
   echo "<td>" . $row['address'] . "</td>";
   echo "<td>" . $row['phone']. "</td>";
    echo "<td>" . $row['e_mail']. "</td>";
  echo "</tr>";
  }
echo "</table>";
}else if ($term == 'tradesmen') {
   //taken from stack overflow

$sql = "SELECT * FROM tradesmen";	//getting information from requested tables
$r_query = mysql_query($sql);


echo "<table border='1'>  
<tr> 
<th>Tradesmen ID</th>
<th>Tradesmen Name</th>
<th>Skill</th>
<th>Availability</th>
<th>Phone</th>
</tr>";
while ($row = mysql_fetch_array($r_query))



 {
  echo "<tr>";
  echo "<td>" . $row['tradesmen_id'] . "</td>";
  echo "<td>" . $row['tradesmen_name'] . "</td>";
  echo "<td>" . $row['skill'] . "</td>";
   echo "<td>" . $row['availability'] . "</td>";
   echo "<td>" . $row['phone']. "</td>";
  echo "</tr>";
  }
echo "</table>";
}else if ($term == 'repairs') {
   //taken from stack overflow

$sql = "SELECT * FROM repairs";	//getting information from requested tables
$r_query = mysql_query($sql);


echo "<table border='1'>  
<tr> 
<th>Project ID</th>
<th>Type</th>
<th>Description</th>
<th>Property ID</th>
<th>Urgency</th>
<th>Tradesmen ID</th>
<th>Tenant ID</th>

</tr>";
while ($row = mysql_fetch_array($r_query))



 {
  echo "<tr>";
  echo "<td>" . $row['project_id'] . "</td>";
  echo "<td>" . $row['type'] . "</td>";
  echo "<td>" . $row['description'] . "</td>";
   echo "<td>" . $row['property_id'] . "</td>";
   echo "<td>" . $row['urgency']. "</td>";
    echo "<td>" . $row['tradesmen_id']. "</td>";
	echo "<td>" . $row['tenant_id']. "</td>";
  echo "</tr>";
  }
echo "</table>";
}else if ($term == 'property') {
   //taken from stack overflow

$sql = "SELECT * FROM property";	//getting information from requested tables
$r_query = mysql_query($sql);


echo "<table border='1'>  
<tr> 
<th>Property ID</th>
<th>Address</th>
<th>Tenant ID</th>

</tr>";
while ($row = mysql_fetch_array($r_query))



 {
  echo "<tr>";
  echo "<td>" . $row['property_id'] . "</td>";
   echo "<td>" . $row['address'] . "</td>";
   echo "<td>" . $row['tenant_id']. "</td>";
  echo "</tr>";
  }
echo "</table>";
}
mysql_close($con); //closing connection

?> 