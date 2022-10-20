<?php

include './../koneksi.php';

$idfasi = $_GET['idfasilitaskamar'];
$tipekamar = $_POST['tipekamar'];
$namafasilitas = $_POST['namafasilitas'];

$con = new PDO("mysql:host=localhost;dbname=hotel_ibnu",'root','');
$query = $con->query("UPDATE `fasilitas_kamar` SET tipekamar='$tipekamar',namafasilitas='$namafasilitas' where idfasilitaskamar='$idfasi'");

if($query){
    header("location:./../admin/fasilitas_kamar_admin.php");
}