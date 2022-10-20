<?php

    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    

    $database = new PDO("mysql:host=localhost;dbname=hotel_ibnu", 'root', '');
    $query = $database->query("insert into siswa values('$nis','$nama','$kelas')");

    if($query){
        header("Location:index.php");
     }