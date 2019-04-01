<?php
$fruit=array("apple","orange","mango","banana");
echo "$fruit[2]<br>$fruit[3]";

?>




<?php
$fruit=array("apple","orange","mango","banana");
foreach ($fruit as $a) {
    echo "$a <br>";
}
?>

<?php
//Associative Array:Key value pair
$group=array("baby"=>10,"teenager"=>20,"adult"=>30);
foreach($group as $key=>$value){
    echo "$key=$value<br>";
}


?>