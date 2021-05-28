<?php
include '../model/databasemahasiswa.php';
$db = new database();

$aksi = $_GET['aksi'];
if($aksi =='tambah'){
    $db->input($_POST['nama'],$_POST['program'],$_POST['email']);
    header("location:../view/tampilmahasiswa.php");
} //Will add a data
elseif($aksi == "hapus"){
    $db->hapus($_GET['id']);
    header("location:../view/tampilmahasiswa.php");
} //Will delete a data
elseif($aksi == "update"){
    $db->update($_POST['id'],$_POST['nama'],$_POST['program'],$_POST['email']);
    header("location:../view/tampilmahasiswa.php");
} //Will update a data
?>
