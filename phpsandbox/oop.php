<?php
class Person{
	private $name ;
	private $email;
	private static $agelimit = 40;


	public function __construct($name, $email) {
		$this->name = $name;
		 $this->email = $email;
		 echo __CLASS__.'created';
	}

	// DEconstructer
	public function __destruct() {
	
		 echo __CLASS__.'destroyed';
	}



	public function setName($name){
		 $this->name = $name;
	}

	public function getName(){
		return $this->name;
	}
	public function setEmail($email){
		 $this->email = $email;
	}

	public function getEmail(){
		return $this->email;
	}

public static function getAgelimit(){
	return self::$agelimit;
}




}

$person = new Person('Jogn Doe', 'me@gmail.com');
// $person->name =  'John doe';
// echo $person->name;

// $person->setName('john');
 echo $person->getName();


class Customer extends Person{

	private $balance;
	public function __construct($name, $email, $balance) {
		parent::__construct($name, $email, $balance);
		 $this->balance = $balance;
		//  $this->email = $email;
		 echo __CLASS__.'created which is new';
	}

public function setBalance($balance){
		 $this->balance = $balance;
	}

	public function getBalance(){
		return $this->balance;
	}

}

// $customer1 = new Customer('john doe ','jd@gmail.com', 300) ;
// echo $customer1 ->getBalance();

// static prop and methods
// echo Person::$agelimit;
echo Person::getAgelimit();


