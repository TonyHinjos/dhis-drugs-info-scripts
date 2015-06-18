<?php
include('includes/connect.php');
  $value=$_POST['reporting_rate_value'];
  $period=$_POST['period'];
  if(isset($_POST['submit']))
  
{
  if(!isset($value) ||!isset($period))
  {
    echo "something is wrong";
  }
  else
  {
    $sql="INSERT into central_reporting_rates(reporting_rate_value,period)values('$value','$period')"; 
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