<?php


function dd ( $value )
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    die();

}



function redirect( $path )
{
    //$url_path = explode('/', parse_url($_SERVER['REQUEST_URI'])['path']);
    header("location: /Spending-Tracker-Web-Application-main{$path}");
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
    return "/Spending-Tracker-Web-Application-main/{$path}";
}