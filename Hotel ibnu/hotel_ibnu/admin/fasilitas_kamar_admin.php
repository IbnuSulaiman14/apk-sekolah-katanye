<?php


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
    <a class="navbar-brand" href="form_admin.php">Hotel YooYo</a>
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
          <a class="nav-link active" aria-current="page" href="form_admin.php">Admin </a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Kamar |</a>
        </li> <li class="nav-item">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="fasilitas_kamar_admin.php">Fasilitas Kamar |</a>
        </li> <li class="nav-item">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="fasilitas_hotel_admin.php">Fasilitas Hotel |</a>
        </li> <li class="nav-item">
        
        <a class="nav-link active" aria-current="page" href="./../logout.php">Logout</a>
          <div class="container-sm">
        
        
</div>
          

        </li>
      </form>
    </div>
  </div>
</nav>

<?php
        include '../koneksi.php';
        $query = $con->query("SELECT * FROM fasilitas_kamar");
        ?>
        <table border="2" cellpadding="10" cellspacing="0" class="table table-bordered border-dark">
            <tr>
                <th  class="table-info">Tipe Kamar</th>
                <th class="table-primary">Nama Fasilitas</th>
                <th class="table-danger">Aksi</th>
                
            </tr>

        <?php while($data = $query->fetch()): ?>
            <tr>
                <td class="table-info"><?= $data['tipekamar'] ?></td>
                <td class="table-primary"><?= $data['namafasilitas'] ?></td>
                <td class="table-danger">
                    <a href="edit_fasilitas.php?idfasilitaskamar=<?= $data['idfasilitaskamar'] ?>"class="btn btn-warning">Update</a>
                    <a href="../proses/proses_hapus_kamar.php?idfasilitaskamar=<?= $data['idfasilitaskamar'] ?>"class="btn btn-danger">Hapus</a>
                </td>
            </tr>
            <br>
            
        <?php endwhile ?>
        </table>
        </div>
        
        <a href="proses_hapus.php?tipekamar=<?= $data['tipekamar'] ?>"class="btn btn-info">Tambah Fasilitas</a>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>    

    
    



