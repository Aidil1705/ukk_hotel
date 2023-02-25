<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Jurusan</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
    <table>
    <tr>
            <td>Fasilitas </td>
            <td>  :  <input type="text" name="fasilitas"></td>
        </tr>
        <tr>
            <td>Keterangan</td>
            <td>  :  <input type="text" name="ket">
            </td>
        </tr>
        <tr>
            <td>foto</td>
            <td>  :  <input type="file" name="foto"></td>
        </tr>
        <tr>
            <td></td>
            <td><button type="submit" name="tambah">Tambah Fasilitas</button></td>
        </tr>
    </table>
    </form>
    <a href="fasilitaad.php"><button>Kembali</button></a>
    <?php
    include "../koneksi.php";
    if(isset($_POST['tambah'])){
        $path = "../img/" . hash("sha256", rand(0, 1000) . $_FILES["foto"]["name"]) . pathinfo($_FILES["foto"]["name"], PATHINFO_EXTENSION);
        move_uploaded_file($_FILES["foto"]["tmp_name"], $path);

       


        mysqli_query($conn,"INSERT INTO fasilitas set
        nama_fasilitas = '$_POST[fasilitas]',
        keterangan = '$_POST[ket]',
        foto = '$path'
        ");

        echo "<h1>Berhasil menambahkan Fasilitas!</h1>";
        header("Location: ../admin/fasilitasad.php");
    }
   
    
    ?>
</body>
</html>