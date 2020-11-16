<?php

// include Config file
require('config.php');
//classes
require('classes/Controller.php');
require('classes/Bootstrap.php');
require('classes/Model.php');
//controllers
require('controllers/home.php');
require('controllers/users.php');
require('controllers/posts.php');
//models
require('models/home.php');
require('models/user.php');
require('models/post.php');

$bootstrap = new Bootstrap($_GET);
$controller = $bootstrap->createController();
if($controller){
    $controller->executeAction();
}