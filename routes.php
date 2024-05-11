<?php


$router->get('/', 'home/index.php');
$router->post('/', 'home/create.php');
$router->delete('/', 'home/delete.php');

$router->get('/edit', 'edit/index.php');
$router->post('/edit', 'edit/update.php');