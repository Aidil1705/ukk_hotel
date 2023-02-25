<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <title>Pesan Kamar</title>
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
    <form action="" method="POST">
    <center>
    <div class="container bordered">
        <div class="row">
            <div class="col-3">
                Tanggal Check In
                <br>
                <input type="date" name="tgl_checkin">
            </div>
            <div class="col-3">
                Tanggal Check Out
                <br>
                <input type="date" name="tgl_checkout">
            </div>
            <div class="col-3">
                Jumlah Kamar
                <br>
                <input type="number" name="banyak_kamar">
            </div>
            <div class="col-3">
                <br>
                
            </div>
        </div>
    </div>
<br>

    </center>
    <h1 class="textnm2">Form Pemesanan</h1>
    <table>
        <tr>
            <td>Nama Pemesan</td>
            <td> : <input type="text" name="nama_pemesan" id=""></td>
        </tr>
        <tr>
            <td>Nama Tamu</td>
            <td> : <input type="text" name="nama_tamu" id=""></td>
        </tr>
        <tr>
            <td> Jenis Kelamin</td>
            <td><input type="radio" name="jeniskelamin" value="Laki-laki" >Laki-laki <input type="radio" name="jeniskelamin" value="Perempuan" >Perempuan </td>
        </tr>
        <tr>
            <td>No Handphone</td>
            <td> : <input type="text" name="tlp" id=""></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td> : <input type="text" name="alamat" id=""></td>
        </tr>
        <tr>
            
            <td>Tipe kamar</td>
            <td> : <select name="id_kamar" id="">
            <?php
            include "../koneksi.php";
            $qry = mysqli_query($conn, "SELECT * FROM kamar, jenis_kamar WHERE kamar.id_jenis_kamar = jenis_kamar.id_jeniskamar order by id_jeniskamar ");
            while($data = mysqli_fetch_array($qry)){
                ?>
                    <option value="<?= $data['id_kamar']?>"><?= $data['nama_kamar']?></option>
                    <?php }?> 
                    </select></td>
            </tr>
            

    </table>
    <center><button class="button1" name="simpan">Konfirmasi Pesanan</button></center>
    </form>
    <br>
    
    <br>
    <br>
    <?php
    include "../koneksi.php";
    if(isset($_POST['simpan'])){
        mysqli_query($conn, "INSERT INTO pesan SET
        tgl_checkin = '$_POST[tgl_checkin]',
        tgl_checkout = '$_POST[tgl_checkout]',
        banyak_kamar = '$_POST[banyak_kamar]',
        nama_pemesan = '$_POST[nama_pemesan]',
        nama_tamu = '$_POST[nama_tamu]',
        jeniskelamin = '$_POST[jeniskelamin]',
        tlp = '$_POST[tlp]',
        alamat = '$_POST[alamat]',
        id_kamar = '$_POST[id_kamar]'     



        ");
    }
    ?>

</body>
</html>