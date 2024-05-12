<?php


$router->get('/', 'home/index.php');
$router->post('/', 'home/create.php');
$router->delete('/', 'home/delete.php');

$router->get('/edit', 'edit/index.php');
$router->post('/edit', 'edit/update.php');


$router->get('/history', 'history/index.php');


$router->get('/login', 'session/index.php');
$router->post('/login', 'session/store.php');
$router->get('/logout', 'session/destroy.php');


$router->get('/registration', 'registration/index.php');
$router->post('/registration', 'registration/store.php');