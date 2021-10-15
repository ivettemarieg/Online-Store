<?php

include ("connect.php");

$result = mysqli_query($link, "SELECT * FROM ad_table WHERE feature_item='Y'");

if(!$result)
{
    //echo('bad search');
}
else
{
    //echo('good search');
    while ($row = mysqli_fetch_array($result))
    {
          ?> 
        <table class=featured>
            <tr>
                <th>Key</th>
                <th>Category Code</th>
                <th>Description</th>
                <th>Category Name</th>
                <th>Featured Item</th>
            </tr>
            <tr>
                <td><?php echo $row['auto_key'] ; ?></td>
                <td><?php echo $row['cat_code'] ; ?></td>
                <td><?php echo $row['content'] ; ?></td>
                <td><?php echo $row['cat_name'] ; ?></td>
                <td><?php echo $row['feature_item'] ; ?></td>
            </tr>
        </table>
          <?
    }
}
?>