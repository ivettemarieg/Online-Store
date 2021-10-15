<?php


if($_SERVER["REQUEST_METHOD"] == "POST"){
    $myusername=$_POST['username'];
    $mypassword=$_POST['password'];
}

include("connect.php");

$sql = "SELECT * FROM cust_table WHERE password='$mypassword' AND cust_email='$myusername'";
$result = mysqli_query($link, $sql);
$count = mysqli_num_rows($result);

if($count == 1){
    header("location: https://teach.park.edu/~igueits6197/part-1");
}
else{ 
    header("location: https://teach.park.edu/~igueits6197/part-3/denied.php");
}

?>


