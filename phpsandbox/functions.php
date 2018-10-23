<?php
# functions block of code that can be  repeatedly called


/* 
camel case : myFunction()
lower case : my_function()
pascal case : MYFunction() used for classes normally

*/
function simple(){
	echo "hello world";
}
// runs function
simple();

// function with parameter

function simplepm($name = 'world'){
	echo "hello $name";
}
simplepm('meenu');
simplepm();
// return value
function simpleadd($a,$b){
return $a + $b;
}

echo simpleadd(2,3);

// by reference 
$num = 10;
function add5($a){
 $a += 5;
}
function add10($a){
 $a += 10;
}

?>