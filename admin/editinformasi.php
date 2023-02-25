<link rel="stylesheet" href="style.css">
<?php
if(isset($_POST['simpan'])){
    $id_info = $_POST['id'];
    $isi = $_POST['content'];
    include "../koneksi.php";
    mysqli_query($conn, "UPDATE informasi SET isi = '$isi' WHERE id_info=1");
    header("location: index.php");
}
?>
<h1>Edit Tentang isi</h1>
<?php
include "../koneksi.php";
global $conn;
$isi = mysqli_query($conn, "SELECT * FROM informasi where id_info=1");
if(mysqli_num_rows($isi)>0){
    while($hasil = mysqli_fetch_array($isi)){
?>
<form action="" method="post">
    <input type="hidden" name="id" value="1" >
    <textarea name="content" id="content" cols="30" rows="10"><?= $hasil['isi']?></textarea>
    <?php }}?>
    <button type="submit" name="simpan" class="button1">Edit</button> 
    
</form>
<a href="index.php"><button class="button1">Batal</button></a>

<script src="../ckeditor/ckeditor.js"></script>
<script>
    CKEDITOR.replace('content');
</script>
