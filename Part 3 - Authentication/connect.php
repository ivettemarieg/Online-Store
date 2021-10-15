<?php


//!-- Your connection information needs to go here, 
$hostname="localhost:3360";
$username="igueits6197_un";
$password="Ua2j_02t234@8";
$dbname="igueits6197_db";
$usertable="cust_table";

$link = mysqli_connect($hostname, $username, $password);

if (!mysqli_select_db($link, $dbname))
{
	//echo('no database selected'); 
	
}
else
{   
  //echo('database selected');  
}
?>