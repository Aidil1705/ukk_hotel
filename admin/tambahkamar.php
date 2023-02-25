<style>
    table tr td tbh{
        text-align: right;
    }
    .bttbh{
        background-color: white;
        color: black;
        border: 2px solid #374e7c;
        border-radius: 100px ;
        padding-left: 15px;
        padding-right: 15px;
        }
    .bttbh:hover{
        background-color: #374e7c ;
        color: white;
        }
</style>
<H1>Tambah Kamar</H1>
<br>
<form action="" method="Post">
<table>
    <tr>
        <td>ID kamar</td>
        <td> : <input type="text" name="id_kamar" id=""></td>
    </tr>
    <tr>
        <td>Jumlah kamar</td>
        <td> : <input type="number" name="jumlah_kamar"></td>
    </tr>
    <tr>
        <td>Harga Sewa</td>
        <td> : <input type="text" name="sewa"></td>
    </tr>
    <tr>
        <td></td>
        <td name="tbh"><button  class="bttbh" type="submit" name="tambah">Tambah</button></td>
    </tr>
</table>
</form>
<?php
include "../koneksi.php";

if(isset($_POST['tambah'])){
    mysqli_query($conn, "insert into kamar set
    id_jeniskamar = '$_POST[id_kamar]',
    banyak_kamar = '$_POST[jumlah_kamar]',
    harga_sewa = '$_POST[sewa]'");
}
?>
