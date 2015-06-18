<?php


include('includes/connect.php');
  $period=$_POST['period'];
  $reportvalue=$_POST['reporting_rate_value'];
  $countyId=$_POST['county_id'];
 
if(isset($_POST['submit']))
  
{
  if(!isset($period) || !isset($reportvalue)|| !isset($countyId))
  {
    echo "something is wrong";
  }
  else
  {
    $sql="INSERT into county_reporting_rates(period,reporting_rate_value,county_id)values('$period','$reportvalue','$countyId')"; 
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