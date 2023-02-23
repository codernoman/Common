<?php
//Loop through an associative array and output the key and the value.

// $ages = array('noman' => '25', 'Sazib' => '32');
// foreach($ages as $age => $y) {
//     echo "Name = " .$age  . ", Age = " .$y ;
// }


//Use the correct array method to sort the $age array according to the values.

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
echo asort($age);