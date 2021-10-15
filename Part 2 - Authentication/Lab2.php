<?php
//gets the connect information for the db
include("connect.php");
//SELECT statement to retreive all information from table
$result = mysqli_query($link, "SELECT * FROM test_330_1 WHERE choice='Y' ");

if(!$result){
    //echo('bad search');
}
else
{
    //echo('good search');
    while($row = mysqli_fetch_array($result))
    {
        ?>
        <table width="400" border="1" cellpadding="0">
            <tr>
                <td><?php echo $row['lname'] ; ?></td>
                <td><?php echo $row['fname'] ; ?></td>
                <td><?php echo $row['email'] ; ?></td>
                <td><?php echo $row['choice'] ; ?></td>
            </tr>
        <table>
        <?
    }
}
?>


