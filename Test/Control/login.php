<?php
session_start();

if(isset($_POST["submit"])){
    $un=$_POST["username"];
    $pw=$_POST["password"];
    if($un=="srijana"  && $pw=="srijana"){
        $_SESSION["sname"]=$un;
        header("Location:admin.php");
    }
    }
?>

<form method="POST" action="">
<table>
<tr><td>Username:
<td><input type="text" name="username" value=""></td>
</tr>

<tr><td>Password:
<td><input type="password" name="password" value=""></td></tr>

<tr><td><input type="submit" name="submit" value="login"</td></tr>

</table>
</form>


