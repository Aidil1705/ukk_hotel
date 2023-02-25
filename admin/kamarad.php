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
    <div>
    <center>
    <div class="tb">
    <table  class="table table-striped">
        <tr>
            <td>No</td>
            <th>Tipe kamar</th>
            <th>Jumlah Kamar</th>
            <th>Harga Sewa</th>
            <th>Aksi</th>
        </tr>
        
            <?php
            include "../koneksi.php";
            $qry = mysqli_query($conn, "SELECT * FROM kamar, jenis_kamar WHERE kamar.id_jenis_kamar = jenis_kamar.id_jeniskamar order by id_jeniskamar");
           $nomor = 1;
            while($data = mysqli_fetch_array($qry)){
            ?>
            <tr>
            <td><?= $nomor++?></td>
            <td><?= $data['nama_kamar']?></td>
            <td><?= $data['banyak_kamar']?></td>
            <td><?= $data['harga_sewa']?></td>
            <td><a href="editkamar.php?id=<?=$data['id_kamar']?>">Ubah</a>/
                <a href="kamarad.php">Lihat</a>

            </td>
            <?php } ?>
        </tr>
        <div class="plus">
    <a href="tambahkamar.php"><i class="fa fa-plus-square" style="font-size:30px; color:black; "></i>
    </div>
    </table>
    </div>
    
    </center>
    </div>
</body>
</html>