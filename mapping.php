<?php
include('includes/connect.php');
  $id=$_POST['mapping_id'];
  $name=$_POST['mapping_id'];
  
if(isset($_POST['submit']))
  
{
  if(!isset($id) ||!isset($name))
  {
    echo "something is wrong";
  }
  else
  {
    $sql="INSERT into mapping_drugs_category(mapping_id,mapping_name)values('$id','$name')"; 
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