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
		$foto = $path;
		
		mysqli_query($conn, "UPDATE informasi SET gambar ='$foto' WHERE id_info=3");
		header("Location: ../admin/index.php");
		return;
	}

	
	$qry = mysqli_query($conn, "SELECT * FROM informasi WHERE id_info=3")or die(mysqli_error($conn));
	$nomor = 1;
	
	while($data = mysqli_fetch_array($qry)){
	?>
	<form action="editfasilitas.php" method="post" enctype="multipart/form-data">		
		<table>
			
			<tr>
				<td>Foto Lama</td>
			

				<td><img src="<?= $data['gambar'] ?>" height="250" width="250"></td>
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