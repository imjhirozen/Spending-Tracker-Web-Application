<?php

$defaultUrl = "/Spending-Tracker-Web-Application" . $GLOBALS['xampp_index'];

function dd ( $value )
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    die();

}

function redirect( $path )
{
    header("location: {$GLOBALS['defaultUrl']}{$path}");
    die();
}

function view( $path, $attribute = [] )
{
    extract( $attribute );
    require 'Views/' . $path;
}

function config( $configName = 'database' )
{

    $config = require 'config.php';
    return $config[$configName];
}

function urlIs($value){
    
    return parse_url($_SERVER["REQUEST_URI"])['path'] == $value;

}

function isUserValid() {
    
    if( empty($_SESSION) ) redirect("/login");

}

function redirectLink( $path )
{
    echo $GLOBALS['defaultUrl'] . "/" . $path;
}


function errorPage( $code, $text )
{
    view("error/404.view.php", [
        "error" => $code,
        "description" => $text,
        "header" => $GLOBALS['defaultUrl']
    ]);

    ;
}