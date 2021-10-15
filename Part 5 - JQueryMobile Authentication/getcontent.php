<?php

// For Categories
$category = $_GET["cat"];

// For Ad Posting
$cat_code = $_POST['cat_code'];
$content = $_POST['content'];
$cat_name = $_POST['cat_name'];
$feature_item = $_POST['feature_item'];

include ("connect.php");

//CATEGORY PAGE
$result = mysqli_query($link, "SELECT * FROM ad_table WHERE cat_code='$category'");

//Post Content
$inserted = mysqli_query($link, "INSERT INTO ad_table (cat_code,content,cat_name,feature_item)
    VALUES ('$cat_code','$content','$cat_name','$feature_item')");

?>
<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>        
  </head>
  <body>
    <div data-role="page">
      <div data-role="header"><h1>Category <?php echo $category ?></h1></div>
      <div data-role="content">
            <?php
               if(empty(!$category))
               {
                 while ($row = mysqli_fetch_array($result))
                 {
                       ?>  
                      <div data-role="listview" data-inset="true">
                        <table width="400" border="1" cellpadding="0">
                          <tr>
                          <td class="odd"><?php echo $row['auto_key'] ; ?></td>
                          <td class="even"><?php echo $row['cat_code'] ; ?></td>
                          <td class="odd"><?php echo $row['content'] ; ?></td>
                          <td class="even"><?php echo $row['cat_name'] ; ?></td>
                          </tr>
                        </table>
                      </div>
                       <?
                 }
               } 
            ?>
      </div>
      <div data-role="footer">
        <div data-role="navbar">
          <ul>
                  <li><a href="https://teach.park.edu/~igueits6197/part-5/home.php" data-icon="home" data-position="fixed"></a></li>
                  <li><a href="https://teach.park.edu/~igueits6197/part-5/categories.php">See More Ads</a></li>
                  <li><a href="https://teach.park.edu/~igueits6197/part-5/addcontent.html">Place an Ad</a></li>
          </ul>
        </div>
      </div>
    </div>
  </body>
</html>
<?
?>


