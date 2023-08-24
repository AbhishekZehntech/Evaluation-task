<?php
class abc{
    private $name = "rishit lowanshi";
    public function __get($property){
        echo "You are trying to access Non Existing or Private Property!($property)";
    }
}
$test = new abc();
$test->name;
//------------------------------------------------------------------------------------
class xyz{
    private $data = ["name"=>"rishit","course"=>"PHP", "fee"=>"2000"];

    public function __get($key){
        if(array_key_exists($key, $this->data)){
            return $this->data[$key];
        }else{
            return "this key($key) is not defined";
        }
    }
}
$test = new xyz();
echo $test->name;
?>