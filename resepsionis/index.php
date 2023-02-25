<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <style>
        .bagde {
            border-radius: 5px;
            padding:3px;
        }
    </style>
    <title>Resepsionis</title>
</head>
<body>
    <?php
    include "headerres.php";
    ?>
    <br>
    <h1 class="text">Hotel Hebat</h1>
    <br>
    
    <nav class="navbar">
  <div class="container-fluid">
    <form class="d-flex" role="search" method="POST">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="cari">
      <button class="btn btn-primary" type="submit">Search</button>
    </form>
  </div>
</nav>
    <br>
    <center>
    <table >
        <tr>
            <th>No</th>
            <th>Nama Tamu</th>
            <th>Jenis Kamar</th>
            <th>Banyak kamar</th>
            <th>Tanggal Check In</th>
            <th>Tanggal Check Out</th>
            <th>Status</th>
            <th>Function</th>
 
        </tr>

        
        
        <?php
        include '../koneksi.php';
        $select = mysqli_query($conn, "SELECT pesan.nama_tamu, jenis_kamar.nama_kamar, pesan.banyak_kamar, pesan.tgl_checkin, pesan.tgl_checkout, pesan.status, pesan.id_pesan FROM pesan, kamar, jenis_kamar WHERE kamar.id_kamar = pesan.id_kamar AND jenis_kamar.id_jeniskamar = kamar.id_jenis_kamar");
        $nomor = 1;

        
        while($hasil = mysqli_fetch_array($select)){

        ?>
        <tr>
            <td><center><?= $nomor++;?></center></td>
            <td><?= $hasil['nama_tamu']?></td>
            <td><?= $hasil['nama_kamar']?></td>
            <td><?= $hasil['banyak_kamar']?></td>
            <td><?= $hasil['tgl_checkin']?></td>
            <td><?= $hasil['tgl_checkout']?></td>
            <td>
                <?php
                if($hasil['status']==0){ ?>
                <span class="badge bg-warning">Check In </span>
                <?php } else { ?>
                    <span class="bagde bg-success">Check Out</span>
                    <?php } ?>

                
            </td>
            <td>
                
                <form action="aksikonfirmasi.php" method="POST">
                    <input type="hidden" name="id_pesan" Value="<?= $hasil['id_pesan']; ?>">
                    <input type="hidden" name="status" value="<?= $hasil['status'] + 1; ?>">
                    <button name="Simpan" class="btn btn-sm btn-primary">Konfirmasi</button>
                </form>
            </td>
        </tr>    
        <?php }?>
        
    </table>
    </center>
</body>
</html>
