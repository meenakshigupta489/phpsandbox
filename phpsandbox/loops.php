<?php
# execute code no. of times
/*
for
while
do .. while
foreach
*/

#for loop
# @parameters - init , condition , inc


for($i = 0; $i< 10; $i ++){
	echo 'number'.$i;
	echo'<br>';
}


# while loop
# @param - condition
$j = 0;
while($j<5){
	echo $j;
    $j++;
}


# do while
# param - condition 
# runs atleast once
$i = 0;
do{
echo $i;
echo '<br>';
$i++;
}
while($i< 5);


#for each works with array
$people =  array('a','b', 'c' );
foreach ($people as $person) {
echo $person;
echo '<br>';
}


$apeople =  array('a'=> '1','b' => '2', 'c' => '3');

foreach ($apeople as $person => $id) {
echo $person.':'.$id;
echo '<br>';
}












?>