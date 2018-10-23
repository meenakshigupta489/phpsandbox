<?php
#array variable that  holds multiple valuues
/*

- indexed
- associative
- multidimensional

*/


#index
$people = array('kevin','jern','sara');
$human = ['kevin','jern','sara'];
$human[3] = 'cherry';
echo $people[3];


echo count($human); // count in array
print_r($human); // see array
var_dump($human); // show type values , key , no of characters

// associative array 
/*
we define key and values

*/
$person = array('Brad' => 35, 'jogm' => 32);
echo $person['Brad'];

$ids = [22 => 'brad', 99 => 'jose'];

echo $ids[22];
echo $ids[28];
$person['jill'] = 43;
echo $person['jill'];

// multidimension
// array within array
$cars = array(
array('honda',20, 10),
array('ford',20, 10),
array('nova',20, 10),

	);
echo $cars[1][2];

?>

