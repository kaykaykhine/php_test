<?php	
 $x = array(1, 2, 3, 4, 5);
 var_dump($x);
 unset($x[3]);
 $x = array_values($x);
 echo "<br>";
array_splice( $original, 3, 0, $inserted );	
?>