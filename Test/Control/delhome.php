<?php


$id=$_GET["id"];

echo $id;
Include("connection.php");

$sql="DELETE FROM home WHERE id='$id'";
$query=mysql_query($sql);
header("Location:admin.php? msg=Deleted");

?>