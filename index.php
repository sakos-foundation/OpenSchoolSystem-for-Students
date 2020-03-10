<?php
	mb_internal_encoding("UTF-8");

	session_start();

	/* Autoloader of classes */
	function autoloadFunction($class)
	{
		/* Is it controller or model? */
		if(preg_match('/Controller$/', $class)){
			require('controller/' . $class . '.php');
		}else{
			require('model/' . $class . '.php');
		}
	}

	spl_autoload_register('autoloadFunction');

	/* Connecting to db */
	Db::connect("localhost", "root", "database", "ossfs");

	/* Save URL to array */
	$router = new RouterController();
	$router->process(array($_SERVER['REQUEST_URI']));

	/* Rendering of view */
	$router->drawView();
