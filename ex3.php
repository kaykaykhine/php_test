<?php
	 $color = array(4 => 'white', 6 => 'green', 11=> 'red');
	 echo current($color) . "<br>";
	 echo next($color) . "<br>";
	 echo next($color) . "<br>";
	 echo prev($color) . "<br>";
	 echo current($color) ."<br>";
	 echo next($color) . "<br>";
	 echo "Real result:" . reset($color) ."<br>";
?>