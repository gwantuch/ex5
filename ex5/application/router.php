<?php

session_start();

function autoloader($class){

		if(file_exists('application/'.strtolower($class).'.php')){
			//first check the application directory
			include_once('application/'.strtolower($class).'.php');

		}elseif(file_exists('application/controllers/'.strtolower($class).'.php')){
			//then check the controller directory
			include_once('application/controllers/'.strtolower($class).'.php');

		}elseif(file_exists('application/models/'.strtolower($class).'.php')){
			//finally check the models directory
			include_once('application/models/'.strtolower($class).'.php');

		}


}
require_once('application/config.php');
spl_autoload_register('autoloader');

require_once('application/libraries/password.php');
spl_autoload_register('autoloader');

$paths= explode('/', $_SERVER['PATH_INFO']);

if($paths[1] == ''){
	$view = DEFAULT_VIEW;
}else{
	$view = $paths[1];
}

$method = $paths[2];

for($i=3;$i < count($paths);$i++){

	$parameters[] = $paths[$i];
}
$controller = ucfirst($paths[1]).'Controller';

if (class_exists($controller)) {
    new $controller($view, $method, $parameters);
} else {
		new Controller('404');
}
