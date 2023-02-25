<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <title>WEBSITE Hotel</title>
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
    <?php
        include "../koneksi.php";
        $qry = mysqli_query($conn, "SELECT * FROM informasi WHERE id_info=1");
        while($hasil = mysqli_fetch_array($qry)){
    ?>
    <h1 class="text"><?php echo $hasil['judul']?></h1>
    <div class="tentang">
        <p><?php echo $hasil['isi']?></p>

        <?php }?>
    </div>
    </center>

</body>
</html>