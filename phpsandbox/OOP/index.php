<?php
// objects
// $object = new stdClass;
// $object->name= ['John', 'Billy', 'susan', 'Max'];
// echo $object->name;
// foreach($object->name as $value){
// 	echo $value.'<br>';
// }
require 'person.php';
$person = new Person;
$person->name="john";
$person->age= 20;

// echo $person->name.' is'. $person->age.'years old'; 
echo $person->sentence();
