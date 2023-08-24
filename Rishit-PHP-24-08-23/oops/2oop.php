<?php

class person{
    public $name;
    public $age;

    function __construct($name = "No Name" , $age = 0)
    {
        $this->name = $name;
        $this->age = $age;        
    }
    function show(){
        echo $this->name . " - " . $this->age . "\n";
    }
}

$p1 = new person();
$p2 = new person("ram lakhan", 40);
$p3 = new person("Sachin sharma" , 24);

$p1->show();
$p2->show();
$p3->show();