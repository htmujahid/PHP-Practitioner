<?php

namespace App\Core;

class Router{

    protected $routes;

    public function get($uri, $controller){
        $this->routes['GET'][$uri] = $controller;
    }

    public function post($uri, $controller){
        $this->routes['POST'][$uri] = $controller;
    }

    public static function load($files){
        $router = new static;

        require $files;

        return $router;

    }

    public function direct($uri, $method){
        if(array_key_exists($uri, $this->routes[$method])){
            return $this->callAction(
                ...explode('@', $this->routes[$method][$uri])
            );
        }
        die('whooops unknow problem');
        
    }

    protected function callAction($controller, $action){
        $controller = "App\\Controllers\\{$controller}";
        
        if(method_exists($controller, $action)){
            return (new $controller)->$action();
        }
    }
}