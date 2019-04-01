<?php
include("connection.php");
$name="";
if(isset($_POST["name"])){
    $name=$_POST["name"];
}


$address="";
if(isset($_POST["address"])){
    $address=$_POST["address"];
}

$phone="";
if(isset($_POST["phone"])){
    $phone=$_POST["phone"];
}

$email="";
if(isset($_POST["email"])){
    $email=$_POST["email"];
}


$country="";
if(isset($_POST["country"])){
    $country=$_POST["country"];


}
echo $address;

if(  $_POST['name'] !=''    &&    $_POST["address"] != ''  &&  $_POST['phone'] !=''    &&  $_POST['email'] !=''  &&  $_POST['country'] !=''    ){
    

    $sql="insert into contact (name,address,phone,email,country) values ('$name', '$address','$phone','$email','$country')" ;
    
    $query=mysql_query($sql) or die("cannot connect");
    
   header("Location:contact.php? msg=Inserted");
    
    }
    else{
        echo "Blank field";
    }
?>