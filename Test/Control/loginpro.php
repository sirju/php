<?php
//chomepro
include("connection.php");
//$username="";
//if(isset($_POST["username"])){
    $username=$_POST["username"];


//$password="";
//if(isset($_POST["password"])){
    $password=$_POST["password"];


/*if($_POST["username"] != '' &&  $_POST['password'] !=''){

$sql="insert into logininfo (username,password) values('$username','$password')" ;

$query=mysql_query($sql) or die("cannot connect")
header("Location:login.php? msg=Inserted");

}
else{
    echo "Blank field";
}*/
$sql="select * from logininfo WHERE username='$username' &&  password='$password'";
$query=mysql_query($sql);
$count=mysql_num_rows($query);
echo $count;

if($count > 0)
{
   echo "login success";
   header("location:chome.php");
   

}

else
{
    echo "incorrect info";
    header("location:login.php");
}

?>


