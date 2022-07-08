<?php

$router->get('', 'HomeController@index');
$router->get('about', 'HomeController@about');
$router->get('contact', 'HomeController@contact');
$router->get('users', 'UserController@index');
$router->post('tasks', 'HomeController@store');
$router->post('users', 'UserController@store');