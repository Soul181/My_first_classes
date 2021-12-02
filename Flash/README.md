Usage

1. Include file with Flash class 
	include 'Flash.php';

2. Do initializatoin class 
	$flash = new Flash();

3. Prepare your vars $name and $message before calling a function of this class like this:
	$name = string 'status like danger, warning, success .....';
	$message = string 'Your message';

3. Set the flash message 
	$flash -> set_flash_message($name, $message);
