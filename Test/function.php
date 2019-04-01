<?php
$price="";
if(isset($_POST["price"])){
    $price=$_POST["price"];
}
$quantity="";
if(isset($_POST["quantity"])){
    $quantity=$_POST["quantity"];
}

function mymul($price,$quantity){
$z=$price*$quantity;
return $z;
}
$res=mymul($price,$quantity);
echo "Multiplication of two number is: " . $res;
?>