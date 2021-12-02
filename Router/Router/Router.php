<?php

class Router {
	// property declaration
	private $routes = [ "/" => '/main/homepage.php', 
			    "/home" => '/main/homepage.php',
			    "/homepage" => '/main/homepage.php',
		  	    "/about" => '/main/about.php'];
	
	private $route = $_SERVER['REQUEST_URI']; 
	
	private $page404 = "your_404_page.html";
	
	// method declaration
	public function __construct($router)
	{
		$this->router = $router;
	}
	
	public function start ($routes, $route){
		if (array_key_exists($route, $routes)){
			include $routes[$route]; 
			exit;
		} else {
			include $page404;
			exit;
			}
	}
}

?>
