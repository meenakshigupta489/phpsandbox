<?php
require('config/config.php');

// create connection
$conn = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
// chweck connection
if(mysqli_connect_errno()){
	echo 'failed to connect to mysql '. mysqli_connect_errno();
}