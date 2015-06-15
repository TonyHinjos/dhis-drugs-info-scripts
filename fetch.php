
<?php
include('includes/connect.php');
// Make a MySQL Connection
$query = "SELECT county_id FROM counties"; 
	 
$result = mysql_query($query);
$county = array();
while($row = mysql_fetch_array($result)){
	 //echo $row['county_id'];
	 //echo "<br />";
	$county[] = "{$row['county_id']}";
	//$county[] = "'". $row['county_id']. "'";
}
//convert the array into json for access in javascript
$county_json = json_encode($county);
echo $county_json;
?>

 