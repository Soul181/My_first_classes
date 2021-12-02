<?php 

class Flash{
	// property declaration
	private $name; 
	
	private $message; 
	
	// method declaration
	public function __construct($flash)
	{
		$this->flash = $flash;
	}
	
	function set_flash_message($name, $message){
		$_SESSION[$name] = $message;
	}		
}

?>