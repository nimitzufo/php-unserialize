<?php

include 'login.php';

class ReadFile {
	public function __tostring(){
		return file_get_contents($this->filename);
	}
}



class User {
	public $username;
	public $isAdmin;
	public function PrintData(){
		if ($this->isAdmin){
			echo $this->username . " is an admin\n";
		} else {
			echo $this->username . " is not an admin\n";
		}
	}
}

//$obj = new User();
//$obj->username = 'someone';
//$obj->isAdmin = True;
$obj = unserialize($_POST['someone']);
$obj->PrintData();

?>
