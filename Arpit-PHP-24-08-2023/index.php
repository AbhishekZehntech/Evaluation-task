<?php

include 'database.php';

$obj = new Database();


$join = "studentclass on student.stclass = studentclass.cid";


$obj->select('student','*',$join ,null,null,2);

echo " select result is : ";
echo "<pre>";
print_r($obj->getResult());
echo "</pre>";


echo $obj->pagination('student',$join ,null,2);

// $obj->insert('student',['name'=>'gopal','address'=>'manipur','mobile'=>'1233211231']);

// echo "insert result is :";
// print_r($obj->getResult());


// $obj->update('student',['name'=>'arpit','address'=>'bhopal','mobile'=>'1233211231'],'id="1"');

// echo "update result is :";
// echo "<pre>";
// print_r($obj->getResult());
// echo "</pre>";

// $obj->delete('student','address="manipur"');

// echo "update result is :";
// echo "<pre>";
// print_r($obj->getResult());
// echo "</pre>";

// $obj->sql('SELECT * FROM student WHERE address="indore"');

// echo "sql result is :";
// echo "<pre>";
// print_r($obj->getResult());
// echo "</pre>";




?>