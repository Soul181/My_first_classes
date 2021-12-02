Usage

1. Set value to your variable like this:
	$var = string 'your value';
	$var = string $_POST['name']';
	$email = 'user@gmail.com';

3. Include file with Validator class 
include 'Validator.php';

4. Do initializatoin class
$result = new Validator();

5. Start the validate like this:
$result -> requered($var);
$result -> checkEmail($email);