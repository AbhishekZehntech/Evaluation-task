<?php
class base{
    public static $name = "rishit lowanshi";

    public static function show(){
        echo self::$name;
    }

    public function __construct(){
        self::show();
    }

}

$test = new base();
$test -> show();