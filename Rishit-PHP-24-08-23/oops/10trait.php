<?php

trait hello{
    public function sayhello(){
        echo "Hello";
    }
}

trait bye{
    public function saybye(){
        echo "Bye Bye";
    }
}

class base{
    use hello, bye;
}

class base2{
    use hello;
}

$test = new base();
$test->sayhello();
$test->saybye();

?>