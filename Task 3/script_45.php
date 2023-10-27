<?php
//script 45 to flip the keys and values of array using array_flip().
 
$Name=array("Mca"=>"kuldip","Mba"=>"John","Msc"=>"Vidhay","Bca"=>"Yuvraj");

$flip=array_flip($Name); 
print_r($flip);

?>