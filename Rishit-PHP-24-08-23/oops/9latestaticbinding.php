<?php

class base{
    protected static $name = "rishi";

    public function show(){
        echo static::$name;
        echo self::$name;
    }
}

class derived extends base{
    protected static $name = "lowanshi";

}

$test = new derived();

$test->show();

?>