<?php


include('includes/connect.php');
  $id=$_POST['drug_id'];
  $period=$_POST['period'];
  $category=$_POST['drug_category_id'];
  $value=$_POST['drug_value'];
  $countyId=$_POST['county_id'];
 
if(isset($_POST['submit']))
  
{
  if(!isset($id) ||!isset($period) || !isset($category)||!isset($value)|| !isset($countyId))
  {
    echo "something is wrong";
  }
  else
  {
    $sql="INSERT into county_level_drugs(drug_id,period,drug_category_id,drug_value,county_id)values('$id','$period','$category','$value','$countyId')"; 
    $qury=mysql_query($sql);
    if(!$qury)
    { 
	     echo mysql_error();
    }
    else
    {
	     echo "Details successfully inserted in database";
	     
    }
  }
}
?>