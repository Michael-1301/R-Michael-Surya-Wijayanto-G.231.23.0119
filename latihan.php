<?php
$age=array("Peter"=>35,"Ben"=>37,"Joe"=>43);

echo json_encode($age);

$cars=array("Volvo","BMW","Toyota");

echo json_encode($cars);

?>

<?php
$jsonobj='{"Peter":35,"Ben":37,"Joe":43}';

$obj=json_decode($jsonobj);

echo $obj->Peter;
echo $obj->Ben;
echo $obj->Joe;

?>
