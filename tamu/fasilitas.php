<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <title>Fasilitas</title>
</head>
<body >
    <?php
    include "headertamu.php";
    ?>
    <br>
  <h1 class="text">Hotel Hebat</h1>
  <?php
        include "../koneksi.php";
        $qry = mysqli_query($conn, "SELECT * FROM informasi WHERE id_info=3");
        while($hasil = mysqli_fetch_array($qry)){
    ?>
    <img src="<?= $hasil['gambar']?>" style= "display:block; margin:auto;" >
    <?php } ?>
    <br>
    <center>
    
<br>

    </center>
    <h1 class="textnm">Fasilitas</h1>
    <div class="container bordered">
        <div class="row">
            
                <?php
                include "../koneksi.php";
                $qry = mysqli_query($conn, "SELECT * FROM fasilitas ");
                while($hasil = mysqli_fetch_array($qry)){
                ?>
                <div class="col-md-4">
                    <img src="<?= $hasil['foto']?>" width=300px; height=250px;  >
                    <br>
                    <p><b><?= $hasil['nama_fasilitas']?></b></p>
                </div>
                <?php } ?>
                
            
            
        </div>
    </div>
    
</body>
</html>