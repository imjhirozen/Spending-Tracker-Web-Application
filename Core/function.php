<?php


function dd ( $value )
{
    echo "<prev>";
    var_dump($value);
    die();

}

function redirect( $path )
{
    header("location: {$path}");
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