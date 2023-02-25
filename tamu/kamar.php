<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <title>Kamar</title>
</head>
<body >
    <?php
    include "headertamu.php";
    ?>
    <br>
    <div>
  <h1 class="text">Hotel Hebat</h1>
  <div class="tipe">
 
    <br>
    <?php
        include "../koneksi.php";
        $qry = mysqli_query($conn, "SELECT * FROM jenis_kamar ");
        while($data = mysqli_fetch_array($qry)){

        
    ?>
    <img class="gambarkamar" src="<?= $data['gambar']?>"  >

    <h3><?= $data['nama_kamar']?></h3>
    <p><?= $data['Fasilitas']?><br></p>

    <?php }?>
    </div>
    </div>
    
</body>
</html>