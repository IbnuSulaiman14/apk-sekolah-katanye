

<?php 

    include './../koneksi.php';

    $idfasi = $_GET['idfasilitaskamar'];
    $query = $con->query("SELECT * FROM fasilitas_kamar WHERE idfasilitaskamar='$idfasi'");
    $data = $query->fetch();
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Update</title>
</head>
<body>
    <div class="container-sm">
    <form action="./../proses/proses_edit.php?idfasilitaskamar=<?= $data['idfasilitaskamar'] ?>" method="post">
        <input type="hidden" name="idfasilitaskamar" value="<?= $tipekamar ?>">
        <div>
            <label>Tipe Kamar</label>
            <input type="text" name="tipekamar" class="form-control" id="floatingInput">
        </div>
        <div>
        <div>
            <label>Nama Fasilitas</label>
            <input type="text" name="namafasilitas" class="form-control" id="floatingInput">
        </div>
        <div>
        
    <br>
            
            
            
        <button type="submit" class="btn btn-info">Simpan</button>
    </form>
    </div>
</body>
</html>     