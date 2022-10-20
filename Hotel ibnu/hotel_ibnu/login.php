<?php



session_start();
if(isset($_SESSION["email"])) { 
    switch ($_SESSION['role']){
      case 'admin':
        header("Location:./admin/form_admin.php");
        break;
      case 'tamu':
        header("location:./tamu/form_tamu.php");
        break;
      case 'resepsionis':
        header("location:./resepsionis/form_resepsionis.php");
        break;
    }
}


?>
<!DOCTYPE html>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" >
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Document</title>
</head>
<body>
<body style="background-color:purple;">
    <form action="./proses/login_proses.php" method="post">
    <div class="container">
    <div class="row">
      <div class="col-md-4 offset-md-4">
        <div class="card my-5">
          <form class="card-body cardbody-color p-lg-5">
            <div class="mb-4 mt-2">
              <div class="text-center">
              <a>Login</a>
            </div>
              <input type="text" class="form-control" name="email" 
                placeholder="Email">
            </div>
            <div class="mb-4">
              <input type="password" class="form-control" name="password" placeholder="password">
            </div>
            <div class="text-center"><button type="submit" class="btn btn-primary px-5 mb-5 w-100">Login</button>
            
            <a href="register.php">Register</a>
            </div>
            
            
            
                        
                    
</form>
  </form>
</body>
</html>