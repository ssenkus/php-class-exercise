<?php 


class Person {
	private $first_name;
	private $last_name;
	private $id;
	static $person_count = 0;
	
	public function __construct($name) {
		$this->first_name = $name;
		$this->last_name =  $name;
		self::$person_count++;
		$this->setID(self::$person_count);
	}
	
	public function setFirstName($fname) {
		$this->first_name = $fname;
	}

	public function getFirstName() {
		return $this->first_name;
	}
	
	public function setLastName($lname) {
		$this->last_name = $lname;
	}	
	public function getLastName() {
		return $this->last_name;
	}
	
	public function getPersonCount() {
		return self::$person_count;
	}
	
	public function setID($pid) {
		$this->id = $pid;
	}
	
	public function getID() {
		return $this->id;
	
	}
	
	public function introduce_self() {
		$output = "My name is " . $this->getFirstName() . " " .  $this->getLastName() . ". \n";
		$output .= "UID = " . $this->id;
		return nl2br($output);
		
	}
}

?>