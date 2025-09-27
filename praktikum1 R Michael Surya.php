<?php
$orang = array(
    array("Nama" => "Andi", "Umur" => 25, "Kota" => "Jakarta"),
    array("Nama" => "michael", "Umur" => 20, "Kota" => "Semarang")
);
echo json_encode($orang);

$buah = array("Apel", "Jeruk", "Mangga");
echo json_encode($buah); 

$jsonobj = '{"Nama":"Nama : Michael","Umur":"Umur : 20","Hobi":["Membaca","Musik","Sepak Bola"]}';
$obj = json_decode($jsonobj);
echo $obj->Nama;
echo $obj->Umur;
echo $obj->Hobi[1];
?>
