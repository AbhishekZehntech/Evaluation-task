<?php

function __autoload($class){
    require "classes/" . $class . ".php";

}
// $test = new second();
// $test1 = new first();
//this is used to call classes and create objects from them, it is used to reduce the load on single page if you make all the classes in singal page
//it will only work if you wrote file name and class name same
?>
