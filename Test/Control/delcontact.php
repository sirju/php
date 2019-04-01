<?php


$id=$_GET["id"];

echo $id;
Include("connection.php");

$sql="DELETE FROM contact WHERE id='$id'";
$query=mysql_query($sql);
header("Location:contact.php? msg=Deleted");

?>