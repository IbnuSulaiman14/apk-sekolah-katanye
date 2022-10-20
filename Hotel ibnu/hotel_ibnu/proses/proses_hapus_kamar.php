<<?php

include './../koneksi.php';

$idfasi = $_GET['idfasilitaskamar'];


$query = $con->query("DELETE FROM fasilitas_kamar WHERE idfasilitaskamar='$idfasi'");

if($query){
    header("location:./../admin/fasilitas_kamar_admin.php");
}
