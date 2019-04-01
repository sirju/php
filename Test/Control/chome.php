

<form action="chomepro.php" enctype="multipart/form-data" method="POST">
<table>

<tr><td>Title:</td>
<td><input type="text" name="title" value="">
</tr>

<tr><td>Content:</td>
<td><textarea rows="5" cols="100" name="content" value=""></textarea></td>
</tr>

<tr><td>Picture</td>
<td><input type="file" name="uploadedfile"></td>
</tr>


<tr><td><input type="submit" name="submit" value="submit">
</tr>

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
<th>Title</th>
<th>Content</th>
<th>Action</th>
</tr>
<?php
include("connection.php");
$sql="select * from home";
$query=mysql_query($sql);
$x=1;
while($row=mysql_fetch_array($query)){
    
?>
<tr>
    <td><?php echo $x; ?></td>
    <td><?php  echo $row['id'];?></td>
    <td><?php  echo $row['title'];?></td>
    <td><?php  echo $row['content'];?></td>
    <td><img src="<?php echo $row['picture'];?>" height="150" width="200"></td>
<td><a href="delhome.php?&id=<?php echo $row['id'];?>">Delete</a>/
<a href="chomeupdate.php?&id=<?php echo $row['id'];?>">Update</a></td>


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

</tr>


</table>

