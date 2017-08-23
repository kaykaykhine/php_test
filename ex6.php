<?php
//AS by value
echo "Ascending order sort by value<br>";
$result1=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40"); 
asort($result1);
foreach($result1 as $a=>$a_value)
{
echo "AS value of ".$a." is : ".$a_value."<br>";
}
//AS by key
echo "Ascending order sort by Key<br>";
$result2=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40"); 
ksort($result2);
foreach($result2 as $b=>$b_value)
{
echo "AS key of ".$b." is : ".$b_value."<br>";
}
//DS by value
echo "Descending order sorting by Value<br>";
$result3=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
arsort($result3);
foreach($result3 as $c=>$c_value)
{
echo "DC value of ".$c." is : ".$c_value."<br>";
}
//DS by key
echo "Descending order sorting by Key<br>";
$result4=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
 krsort($result4);
foreach($result4 as $d=>$d_value)
{
echo "DC key of ".$d." is : ".$d_value."<br>";
} 
?>
