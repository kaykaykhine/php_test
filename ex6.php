<?php

//DS by key
echo "Descending order sorting by Key<br>";
$result4=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
 krsort($result4);
foreach($result4 as $d=>$d_value)
{
echo "DC key of ".$d." is : ".$d_value."<br>";
} 

echo "Ascending order sort by value<br>";
$result1=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40"); 
asort($result1);
foreach($result1 as $a=>$a_value)
{
echo "AS value of ".$a." is : ".$a_value."<br>";
}

?>
