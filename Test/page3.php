<?php  
for ($x = 0; $x <= 10; $x++) {
  echo "$x <br>";
}
?> 


<?php 
$x = 6;

do {
    echo "The number is: $x <br>";
    $x++;
} while ($x <= 5);
?>



<?php 
$x = 0; 

do {
    echo "The number is: $x <br>";
    $x++;
} while ($x <= 5);
?>


<?php 
$colors = array("red", "green", "blue", "yellow"); 

foreach ($colors as $value) {
    echo "$value <br>";
}
?>


<?php 
$x = 1; 

while($x <= 5) {
    echo "The number is: $x <br>";
    $x--;
} 
?>