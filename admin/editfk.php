<link rel="stylesheet" href="style.css">
<?php
if (isset($_POST['Simpan'])) {

        $path = "../img/" . hash("sha256", rand(0, 1000) . $_FILES["foto"]["name"]) . "." . pathinfo($_FILES["foto"]["name"], PATHINFO_EXTENSION);
        move_uploaded_file($_FILES["foto"]["tmp_name"], $path);

		$id_jeniskamar = $_GET['id'];
		$Fasilitas = $_POST['content'];
        $gambar = $path;
		global $conn;
        include "../koneksi.php";
		mysqli_query($conn, "UPDATE jenis_kamar SET Fasilitas = '$Fasilitas', gambar = '$gambar' WHERE id_jeniskamar = '$id_jeniskamar'");
		header('Location: fk.php');
	}
    ?>
<div class="container">
    <h1 class="judul">EDIT Fasilitas</h1>
    <?php
include '../koneksi.php';
global $conn;
$Fasilitas = mysqli_query($conn, "SELECT * FROM jenis_kamar WHERE id_jeniskamar = '".$_GET['id']."'");
if(mysqli_num_rows($Fasilitas)>0){
while($hasil = mysqli_fetch_array($Fasilitas)){
    ?>
    </br>
    <h1><?= $hasil['nama_kamar']?></h1>
    <form action="" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id_jeniskamar" value="<?= $_GET['id'] ?>">
    <textarea name="content" id_jeniskamar="content" cols="30" rows="10"><?= $hasil['Fasilitas'] ?></textarea>
    <?php }}?>


    <P><label for="foto"><input type="file" name="foto" id=""></label></P>
    <button class="button1" type="submit" name="Simpan">Edit</button>
</form>
</div>
<script src="../ckeditor/ckeditor.js"></script>
<script>
    CKEDITOR.replace('content');
</script>