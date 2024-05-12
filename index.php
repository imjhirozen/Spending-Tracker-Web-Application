<?php

session_start();

require 'Core/Router.php';
require 'Core/Validator.php';
require 'Core/function.php';
require 'Core/Database.php';

$router = new Router();

require 'routes.php';
$uri =  parse_url( $_SERVER['REQUEST_URI'] )['path'];
$method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];



$router->route( $uri, $method );