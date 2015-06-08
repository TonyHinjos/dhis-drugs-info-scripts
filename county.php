<?php
include('includes/connect.php');
  $id=$_POST['drug_id'];
  $period=$_POST['period'];
  $category=$_POST['drug_category_id'];
  $value=$_POST['drug_value'];
 
if(isset($_POST['submit']))
  
{
  if(!isset($id) ||!isset($period) || !isset($category)||!isset($value))
  {
    echo "something is wrong";
  }
  else
  {
    $sql="INSERT into central_level_drugs(drug_id,period,drug_category_id,drug_value)values('$id','$period','$category','$value')"; 
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