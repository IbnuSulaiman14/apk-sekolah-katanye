<?php
 session_start();

    $email = $_POST['email'];
    $password = $_POST['password'];
    


 $koneksi = new PDO('mysql:host=localhost;dbname=hotel_ibnu','root','');

 $query = $koneksi->query("select * from user where email='$email' AND password='$password'");
 $data = $query->fetch();
 
 if($query->rowCount() > 0){
   $_SESSION['email'] = $email;
   $_SESSION['role'] = $data['role'];

   if($data['role']=="admin"){
      header("Location:../admin/form_admin.php");
   }
   else if($data['role']=="tamu"){
      header("Location:../tamu/form_tamu.php");
   }
  else if($data['role']=="resepsionis"){
    header("Location:../resepsionis/form_resepsionis.php");
}
}else{
  header("Location:login.php");
}