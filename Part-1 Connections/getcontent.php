<?php

$category = $_GET["cat"];

$cat_code = $_POST['cat_code'];
$content = $_POST['content'];
$cat_name = $_POST['cat_name'];
$feature_item = $_POST['feature_item'];

include ("connect.php");

//CATEGORY PAGE
$result = mysqli_query($link, "SELECT * FROM ad_table WHERE cat_code='$category'");

"PETS Category should be the title"

    ?> 
    <title>Category Page</title>
    <h1> Category Page <h1>

<?php

//INSERTS

$inserted = mysqli_query($link, "INSERT INTO ad_table (cat_code,content,cat_name,feature_item)
    VALUES ('$cat_code','$content','$cat_name','$feature_item')");
  
if($inserted)
{
  echo("Post was successfully inserted!");
}

//MIGHT FIX THIS LATER?
if(empty(!$category))
{
  while ($row = mysqli_fetch_array($result))
  {
        ?>  
      <table width="400" border="1" cellpadding="0" class="c-grid">
          <tr>
          <td class="odd"><?php echo $row['auto_key'] ; ?></td>
          <td class="even"><?php echo $row['cat_code'] ; ?></td>
          <td class="odd"><?php echo $row['content'] ; ?></td>
          <td class="even"><?php echo $row['cat_name'] ; ?></td>
          </tr>
      </table>
        <?
  }
}
else
{
  $display = mysqli_query($link, "SELECT * FROM ad_table WHERE cat_code='$cat_code'");
  while ($row = mysqli_fetch_array($display))
  {
        ?>  
      <table width="400" border="1" cellpadding="0" class="c-grid">
          <tr>
          <td class="odd"><?php echo $row['auto_key'] ; ?></td>
          <td class="even"><?php echo $row['cat_code'] ; ?></td>
          <td class="odd"><?php echo $row['content'] ; ?></td>
          <td class="even"><?php echo $row['cat_name'] ; ?></td>
          </tr>
      </table>
        <?
  }
 
} 
?>
<a href="index.php">Return Home</a>
<?
?>