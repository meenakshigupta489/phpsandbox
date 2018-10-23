<?php
$path = 'dir/dir1/myfile.php';
$file= 'file3.txt';

// return filename
// /echo basename($path);

// return filename without ext
// echo  basename($path,'.php');
// 

// return dir name form the path
// echo dirname($path);


// heck if file exists it also checks for folder
// echo file_exists($file);


// get real or absoulte path
// echo realpath($file);


// check to see if files
// echo is_file($file);

// heck if file is writeable

// echo is_writable($file);  

// heck if file is readable

// echo is_readable($file);  

// get file size
// echo filesize($file);

// create  s directory
// mkdir('testing');

// will delete the directory until no files in it
// rmdir('testing');

// copy files
// echo copy(source, dest)
// echo copy('file1.txt','file2.txt');

// rename file
// rename('file2.txt','file3.txt');


// delete file
// unlink('file1.txt');


// write from file to string
// echo file_get_contents('file3.txt');

// write string to the file but replace previous content
// echo file_put_contents($file,'goodbye world');


// appen to the content
// $current =  file_get_contents('file3.txt');
// $current .= 'lol u';

// file_put_contents($file,$current);



// open a file for reading
// $handle = fopen($file,'r');
// $data = fread($handle,filesize($file));
// echo $data;

// open file for writting
$handle = fopen($file,'w');
$txt = 'john';
 fwrite($handle,$txt);
 fclose($handle);

