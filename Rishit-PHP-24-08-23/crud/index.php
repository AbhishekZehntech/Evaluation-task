<?php
    include 'database.php';

    $obj = new Database();
    // $obj->insert('student',['sid'=>'02','sname'=>'Aman Soni', 'sclass'=>'8th','ssub'=>'English','smarks'=>'89']);
    // echo "Insert result is : ";
    // print_r($obj->getResult());

    // $obj->update('student',['sid'=>'02','sname'=>'Aman Singh Soni', 'sclass'=>'8th','ssub'=>'English','smarks'=>'89'], 'sid="02"');
    // echo "Update result is : ";
    // print_r($obj->getResult());

    $obj->delete('student', 'sid="1"');
    // echo "delete result is : ";
    // print_r($obj->getResult());
?>