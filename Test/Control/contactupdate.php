<?php
$id=$_GET["id"];

echo $id;
include("connection.php");
$sql="SELECT * FROM contact WHERE id='$id'";
$query=mysql_query($sql);
 
 while($row=mysql_fetch_array($query)){
    

?>

<form action="" method="POST">

<table>
<tr><td>Name:</td>
<td><input type="text" name="name" value="<?php  echo $row['name'];?>"></tr>


<tr><td>Adresss:</td>
<td><input type="text" name="address" value="<?php  echo $row['address'];?>"></tr>

<tr><td>phone:</td>
<td><input type="text" name="phone" value="<?php  echo $row['phone'];?>"></tr>

<tr><td>email:</td>
<td><input type="text" name="email" value="<?php  echo $row['email'];?>"></tr>


<tr><td>country:</td>
<td><input type="text" name="country" value="<?php  echo $row['country'];?>"></tr>



<tr><td><input type="submit" name="submit" value="update"></td></tr>

</table>
</form>
<?php }?>

<?php
if(isset($_POST["submit"])){

$name=$_POST["name"];

$address=$_POST["address"];

$phone=$_POST["phone"];
//include("connection.php");
$email=$_POST["email"];
$country=$_POST["country"];

$sql="update contact set name='$name',address='$address',phone='$phone', email='$email', country='$country' WHERE id='$id'";
$query=mysql_query($sql);
header("Location:contact.php? msg=Updated");
}

?>