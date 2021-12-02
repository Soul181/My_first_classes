<?php

class Validator{
	// property declaration
	private $var;
	
	private $email;
	
	// method declaration
	public function __construct($validator)
	{
		$this->validator = $validator;
	}
	
	function requered($var){
		if (!$var){
			return $message = "Поле не заполнено";
		}
	}
	
	function checkEmail($email){
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			return $message = "Проверьте правильность Вашего Email";
		}
	}
}

?>