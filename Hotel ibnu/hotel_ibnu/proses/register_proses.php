<?php
    require("koneksi.php");
    
    $nama = $_POST["nama"];
    $nohp = $_POST["nohp"];
    $email = $_POST["email"];
    $password = $_POST["password"];


    $query = $con->query("insert into user values(null,'$nama','$email','$nohp','tamu','$password')");

    if ($query){
        Header("Location:login.php");
    }
?>