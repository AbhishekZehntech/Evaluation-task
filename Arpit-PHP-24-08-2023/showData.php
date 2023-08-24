<?php
include 'database.php';

$obj = new Database();


$join = "studentclass on student.stclass = studentclass.cid";
$limit = 2;

$obj->select('student','*',$join ,null,null,$limit);
$result = ($obj->getResult());

echo "<table border='1' width = '500px'>
<tr>
<th>ID</th>
<th>NAME</th>
<th>ADDRESS</th>
<th>MOBILE</th>
<th>CLASS_NAME</th>

</tr>

";

foreach ($result as list("id"=>$id,"name"=>$name,"address"=>$address,"mobile"=>$mobile,"cname"=>$cname)){

echo "<tr><td>$id </td><td> $name </td><td>  $address -</td><td> $mobile </td><td> $cname</tr>";
}

echo "</table>";

echo $obj->pagination('student',$join ,null,$limit);


?>