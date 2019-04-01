<?php 
$name = $_POST["name"];
$address = $_POST["address"];
$phone =$_POST["phone"];
$gender="";
if(isset($_POST["rbtn"])){
    $gender=$_POST["rbtn"];
}

$php="";
if(isset($_POST["php"])){
    $php=$_POST["php"];
}
$java="";
if(isset($_POST["java"])){
    $java=$_POST["java"];
}
?>

<table border="1">
<tr>
<th>Name</th>
<th>Address</th>
<th>Phone</th>
<th>Gender</th>
<th>Course</th>
<th>Php</th>
</tr>
<tr><td> <?php echo $name ?></td>
<td> <?php echo $address ?></td>
<td> <?php echo $phone ?></td>
<td> <?php echo $gender ?></td>
<td> <?php echo $php ?></td>
<td> <?php echo $java ?></td>
</tr>
</table>