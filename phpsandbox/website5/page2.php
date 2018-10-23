=<?php 
if(isset($_COOKIE['name'])){
// to update cookie use setcookie
setcookie('name','henry', time() + (86400* 30));

// to unset it set the time of past
 setcookie('name','henry', time() - (86400* 30));
if(count($_COOKIE) > 0){
	echo "there are ".count($_COOKIE).'cookies saved<br>';
}
else{
	echo "there are no cookies";
}


echo 'User'.$_COOKIE['name'].'is set' ;
	}
	else {
		echo "user is not set";
	}