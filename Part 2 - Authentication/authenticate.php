<?php

$username = $_POST['username'];
$password = $POST['password'];

include("connect.php");

$result = mysqli_query($link, "SELECT * FROM cust_table");

if($result)
{
    echo('good');
}
else
{
    echo('bad');
}



?>