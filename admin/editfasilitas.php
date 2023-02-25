<!DOCTYPE html>
<html>
<head>
    <title>Edit fasilitas</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h3>Edit data</h3>
 
	<?php 
	include "../koneksi.php";

	if (isset($_POST['Simpan'])) {
		$path = "../img/" . hash("sha256", rand(0, 1000) . $_FILES["foto"]["name"]) . pathinfo($_FILES["foto"]["name"], PATHINFO_EXTENSION);
        move_uploaded_file($_FILES["foto"]["tmp_name"], $path);




		$id = $_POST['id'];
		$nama_fasilitas = $_POST['nama_fasilitas'];
		$keterangan = $_POST['keterangan'];
		$foto = $path;
		
		mysqli_query($conn, "UPDATE fasilitas SET nama_fasilitas ='$nama_fasilitas', keterangan='$keterangan', foto='$foto' WHERE id_fasilitas='$id'");
		header("Location: fasilitasad.php");
		return;
	}

	$id = $_GET['id'];
	$qry = mysqli_query($conn, "SELECT * FROM fasilitas WHERE id_fasilitas='$id'")or die(mysqli_error($conn));
	$nomor = 1;
	
	while($data = mysqli_fetch_array($qry)){
	?>
	<form action="editfasilitas.php" method="post" enctype="multipart/form-data">		
		<table>
			<tr>
				<td>fasilitas</td>
				<td>
					<input type="hidden" name="id" value="<?php echo $data['id_fasilitas'] ?>">
					<input type="text" name="nama_fasilitas" value="<?php echo $data['nama_fasilitas'] ?>">
				</td>					
			</tr>	
			<tr>
				<td>Keterangan</td>
				<td><input type="text" name="keterangan" value="<?php echo $data['keterangan'] ?>"></td>					
			</tr>	
			<tr>
				<td>Foto Lama</td>
			

				<td><img src="<?= $data['foto'] ?>" height="250" width="250"></td>
			</tr>
			<tr>
				<td>Foto Baru</td>
				<td><input type="file" name="foto" id=""></td>	
			</tr>
			<tr>
				<td></td>
				<td><button type="submit" name="Simpan">Edit fasilitas</button></td>					
			</tr>				
		</table>
	</form>
	<?php } ?>
</body>
</html>