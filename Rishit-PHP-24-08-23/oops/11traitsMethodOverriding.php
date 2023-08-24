<?php

trait hello{
    public function sayhello(){
        echo "Hello form Trait. \n";
    }
}

trait hi{
    public function sayhello(){
        echo "hello form Hi Trait. \n";
    }
}
class base{
    use hello, hi{
        hello::sayhello insteadof hi;
    }
}

$test = new base();
$test->sayhello();

?>