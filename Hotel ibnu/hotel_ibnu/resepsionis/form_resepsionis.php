<?php

session_start();
if(isset($_SESSION["email"])) { 
  switch ($_SESSION['role']){
    case 'admin':
      header("./resepsionis/Location:form_admin.php");
      break;
    case 'tamu':
      header("./tamu/Location:form_tamu.php");
      break;
  }
}
else{
  header("Location:./../login.php");
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hotel yooyo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-primary">
    <div class="container-fluid">
    <a class="navbar-brand" href="#">Hotel YooYo</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
      </ul>
      <form class="d-flex">
      <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
      <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="form_tamu">Resepsionis |</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Fasilitas Kamar |</a>
        </li> <li class="nav-item">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="fasilitas_tamu.php">Fasilitas Hotel |</a>
        </li> <li class="nav-item">
        
        <a class="nav-link active" aria-current="page" href="./../logout.php">Logout</a>
          
          

        </li>
      </form>
    </div>
  </div>
</nav>
            

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>    