<?php
# Conditional
/* 
==
=== - idential data type also
<
>
<=
>=
!==


*/
$num = '6';

if($num != 6){
	echo '5 passed';
}
elseif($num >= 6){
	echo '6 passed';

}
else
{
	echo " not passed";
}



$cat = 8;
if( $cat > 6){
	if( $cat < 20){
		echo "my cat";
	}
}

/*

logical operator 
and &&
or ||
xor  one of them has to be true but not both of them
*/
if($num > 4 XOR $num < 10){
	echo $num.'passed';
}


/* 
swtich


*/

$favColor = "red";
switch ($favColor) {
	case 'red':
		echo ' bloody red';
		break;
    case 'black':
		echo 'devil black';
		break;
	
	default:
		echo " no color selected";
		break;
}



?>
