<?php

namespace App\Core;

use FFI\Exception;
class App{

    protected static $registery = [];

    public static function bind($key, $value){
        static::$registery[$key] = $value;
    }

    public static function get($key){
        if (array_key_exists($key, static::$registery)) {
            return static::$registery[$key];
        }
        throw new Exception("No {$key} is bound in container");
    }
}