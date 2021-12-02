Usage
1. Insert into router.php your dependencies like this:
private $routes = [ "/" => '/main/homepage.php', 
		"/home" => '/main/homepage.php',
		"/homepage" => '/main/homepage.php',
		"/about" => '/main/about.php'];

2. Set name of your 404 page file
private $page404 = "your_404_page.html";

3. Include file with Router class 
include 'router.php';

4. Do initializatoin class
$route = new Router();

5. Start the routing
$route -> start();
