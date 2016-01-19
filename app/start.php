<?php

//start the session
session_cache_limiter(false);
session_start();

//remove before flight
ini_set('display_errors', 'On');

define('INC_ROOT', dirname(__DIR__));

require INC_ROOT . '/vendor/autoload.php';

//create the App
$app = new \Slim\App();

// NEED TO HANDLE REQUESTS AND RETURN VIEWS
//VIEWS ARE NOT DEFINED, BUT SLIM TWIG IS AUTOLOADED
