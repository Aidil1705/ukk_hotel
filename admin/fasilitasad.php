<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Banyak Kamar</title>
</head>
<body>
    <?php
    include "headeradm.php";
    ?>
    <br>
    <br>
    <center>
    <div class="tb">
    <table  class="table table-striped">
        <tr>
            <th>Nama Fasilitas</th>
            <th>Keterangan</th>
            <th>Gambar</th>
            <th>Aksi</th>
        </tr>
        <?php
        include "../koneksi.php";
        $select = mysqli_query($conn, "SELECT * FROM fasilitas ");
        while($hasil = mysqli_fetch_array($select)){
            ?>
        <tr>
            <td><?= $hasil['nama_fasilitas']?></td>
            <td><?= $hasil['keterangan']?></td>
            <td><img src="<?= $hasil['foto']?>" width="100px" height="100px"></td>
            <td><a href="editfasilitas.php?id=<?=$hasil['id_fasilitas']?>">Ubah</a>/
                <a href="fasilitas.php">Lihat</a>

            </td>
            <?php }?>
        </tr>
        <div class="plus">
    <a href="tambahfasilitas.php"><i class="fa fa-plus-square" style="font-size:30px; color:black; "></i></a>
    </div>
    </table>
    </div>
    
    </center>
</body>
</html>