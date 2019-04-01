<table border="1" width="60%">
<tr><th>S.No</th>
<th>Id</th>
<th>Name</th>
<th>Address</th>
<th>Phone</th>
<th>Email</th>
<th>Country</th>
</tr>
<?php
include("connect.php");
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
    


</tr>


</table>
</div>
</body>
</html>