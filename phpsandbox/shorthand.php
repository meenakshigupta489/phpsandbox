<?php
$loggedIn = true;

$arr = [1,2,3,3,5];
// if($loggedIn){
	// echo "you are logged in.";
// }
// /else{
// 	// echo "you are  not logged in.";
// }
// 


// echo ($loggedIn) ? 'You are logged in' : 'you are  not logged in.';


// $isRegistered =  ($loggedIn == true) ? true : false ;
// echo $isRegistered;


// $age = 20;
// $score = 9;

// echo "your score is ",($score > 10 ? ($age > 10 ? 'Average': 'Exceptional'): ($age > 10 ? 'Horrible': 'Average')); 
?>
<!-- <div>
<?php if($loggedIn) { ?>
<h1> welcome </h1>

<?php } 
else { ?>
	<h1> get out </h1>
<?php } ?>
</div> -->





<div>
<?php if($loggedIn): ?>
<h1> welcome </h1>

<?php endif; ?>
</div>
<div>
	<?php foreach ($arr as  $value): ?> 
	<?php echo $value; ?>
<?php endforeach; ?>
	
</div>


