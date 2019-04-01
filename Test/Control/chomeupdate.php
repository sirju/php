<?php
$id=$_GET["id"];

echo $id;
include("connection.php");
$sql="SELECT * FROM home WHERE id='$id'";
$query=mysql_query($sql);
 
 while($row=mysql_fetch_array($query)){
    echo $row["title"]; 

?>

<form action="" method="POST">

<table>
<tr><td>Title:</td>
<td><input type="text" name="title" value="<?php  echo $row['title'];?>"></tr>

<tr><td>Content:</td>
<td><textarea name="content" ><?php  echo $row['content'];?></textarea></tr>

<tr><td><input type="submit" name="submit" value="update"></td></tr>

</table>
</form>
<?php }?>

<?php
if(isset($_POST["submit"])){

$title=$_POST["title"];

$content=$_POST["content"];
//include("connection.php");

$sql="update home set title='$title',content='$content' WHERE id='$id'";
$query=mysql_query($sql);
header("Location:admin.php? msg=Updated");
}

?>



