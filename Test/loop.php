<?php
$x=5;
for($i=1; $i<=10;$i++){
    $z=$x*$i;
    echo "$x*$i=$z <br>";
}
?>
<?php
$a=0;
for($i=1; $i<=10;$i++){
    $a=$a+$i;
} 
$z=($a*20/100);
$a=$a-$z;
echo "$a";
?>
<?php
$i=0;
while($i<=5){
echo "$i <br>";
$i++;
}
?>


<?php
$x=6;
$i=1;
while($i<=10){
    $z=$x*$i;
echo "$x*$i=$z <br>";
$i++;

} ?>


<?php
$a=0;
do{
    echo "$a <br>;
    $a++;
}
while($a<=10);

?>

<?php
$x=0;
$i=1;
while($i<=10){
    $x=$x+$i;
    $i++;
}
$z=$x/10;
echo $z;
?>



<html>
<head>SN</head>
<table border="1">
<tr><th>SN </th></tr>
<?php
for($i=1; $i<=10;$i++){
    //echo "$i <br>";
?> 

<tr ><td><?php echo $i ?></td>
</tr>

<?php } ?>
</table>
</html>