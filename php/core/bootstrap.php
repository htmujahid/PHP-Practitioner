<?php


use App\Core\Database\QueryBuilder;
use App\Core\Database\Connection;
use App\Core\App;

require 'vendor/autoload.php';

App::bind('config', require 'config.php');


App::bind(
    'database', 
    new QueryBuilder(Connection::make(App::get('config')['database']))
);

function view($name, $data=[]){
    extract($data);
    return require "App/views/{$name}.view.php";
}

function redirect($path){
    header("Location: /{$path}");
}