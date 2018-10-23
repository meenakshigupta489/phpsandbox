<?php

echo date('d'); // day
echo date('m'); // month
echo date('Y'); // Year
echo date('l'); // Day of the weeek
echo date('Y/m/d');
//set time zone
// date_default_timezone_set('America/New_York');
echo date('h:i:s:a'); // hour min sec am/pm

$timestamp = mktime(10,14,15,9,10,1995);

echo $timestamp;
echo date('Y/m/d',$timestamp);


$timestamp2 = strtotime(' 7:00pm March 22 2016');
echo $timestamp2;
echo date('Y/m/d',$timestamp2);

$timestamp3 = strtotime('Now');
echo date('Y/m/d',$timestamp3);
$timestamp3 = strtotime('Next sunday');
$timestamp3 = strtotime('+2 Days');


?>