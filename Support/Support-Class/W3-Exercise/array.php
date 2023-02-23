<?php

$furits = array("Apple", "Banana", "Orange");

//Count array length 
// echo count($furits);

//Output the second item in the $fruits array.
// echo $furits[1];

//Create an associative array containing the age of Peter, Ben and Joe.

// $ages = array("Rakib"=> "69", "Azad"=>"68");
// foreach($ages as $name=>$age){

//     echo $name ."=". $age.PHP_EOL;
// }

//Use the correct array method to sort the $colors array alphabetically.

// $color = array("a"=>"1", "b"=>"10", "c"=> "2");

// rsort($color);
// print_r($color);

$bookName=[
    'book1'=> explode(', ','Islam, Science, math'),
    'book2'=> explode(', ','Azad, English, Bangla'),
    'book3'=> explode(', ','Hasan, Physics, math')
];

print_r($bookName);