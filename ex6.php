<?php
//AS by value
echo "Ascending order sort by value<br>";
$result1=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40"); 
asort($result1);
foreach($result1 as $a=>$a_value)
{
echo "AS value of ".$a." is : ".$a_value."<br>";
}

?>
