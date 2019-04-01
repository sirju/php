<html>
<head>
<link rel="stylesheet" href="./bootstrap/bootstrap.min.css">
<script src="./bootstrap/bootstrap.min.js"></script>
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> -->

</head>
<body>
<div class="container-fluid" style="background-color:green">

<form  class="form-inline" action="contactpro.php" method="POST">
<table class="table table-dark" class="table table-striped">
<tr><td >Name:</td>
<td><input type="text" class="form-control"  name="name" value=""></tr>

<tr><td>Address:</td>
<td><input type="text"  class="form-control" name="address" value=""></tr>

<tr><td>Phone:</td>
<td><input type="text" class="form-control" name="phone" value=""></tr>

<tr><td>Email:</td>
<td><input type="text" class="form-control"  name="email" value=""></tr>


<tr><td>Country:</td>
<td><input type="text" class="form-control" name="country" value=""></tr>

<tr><td><input type="submit" class="btn btn-success" name="submit" value="Click me"></td></tr>

</table>


</form>

<hr>
<?php
if(isset($_GET["msg"])){
    echo $_GET["msg"];
}
?>
<table border="1" width="60%">
<tr><th>S.No</th>
<th>Id</th>
<th>Name</th>
<th>Address</th>
<th>Phone</th>
<th>Email</th>
<th>Country</th>
<th>Action</th>
</tr>
<?php
include("connection.php");
$sql="select * from contact";
$query=mysql_query($sql);
$x=1;
while($row=mysql_fetch_array($query)){
    
?>
<tr>
    <td><?php echo $x; ?></td>
    <td><?php  echo $row['id'];?></td>
    <td><?php  echo $row['name'];?></td>
    <td><?php  echo $row['address'];?></td>
    <td><?php  echo $row['phone'];?></td>
    <td><?php  echo $row['email'];?></td>
    <td><?php  echo $row['country'];?></td>

<td><a href="delcontact.php?&id=<?php echo $row['id'];?>">Delete</a>/
<a href="contactupdate.php?&id=<?php echo $row['id'];?>">Update</a></td>


</tr>
<?php
$x++;
}
?>
<tr>
    <td>...</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>


</tr>


</table>
</div>
</body>
</html>