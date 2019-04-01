<table border="1" width="60%">
<tr><th>S.No</th>
<th>Id</th>
<th>Title</th>
<th>Content</th>

</tr>
<?php
include("connect.php");
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


</tr>


</table>
