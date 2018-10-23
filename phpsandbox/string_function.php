<?php

# substr()
# returns the portiom of string
// $output = substr("hello",2);
// echo $output;
# print llo
# use -ve no. to start from back

# strlen()
# returns length of string
// $output1 = strlen('hello world');
// echo $output1 ;


#strpos()
# finds the position of the first occurance of sub string

// $output2 = strpos("hello world",'o');
// echo $output2 ;

#strrpos()
#finds the position of the last occurance of the sub

// $output3 = strrpos('hello world','o');
// echo $output3 ;

#trim()
# strips whitespace
// $text = 'hello world             ';
// var_dump($text);
// $trimmed = trim($text);
// var_dump($trimmed);


#strtoupper
// $output = strtoupper("hello world");
// echo $output;


#strtolower
// $output = strtolower("heETYY world");
// echo $output;

#ucwords
#capitailized every word
// $output = ucwords('hello world');
// echo $output;


#str_replace()
#replace all occurance of a search string with a replacement


// $text = 'hello world';
// $output = str_replace('world','Everyone',$text);
// echo $output;

#is_string()
# check if string
$val = 'hello world';
$output = is_string($val);
echo $output;


$values =  array(true,false, null , 'abc', 33, '33', 22.4, 0, '0');


foreach ($values as  $value) {
	if (is_string($value)) {
		echo "{$value} is string<br>";
	}
}

#gzcompress()
# compress string


$string = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";
$compressed = gzcompress($string);
// echo $compressed;


# uncompress
$uncompressed = gzuncompress($compressed);
echo $uncompressed;



