
<?php 
	include "../koneksi.php";

	if (isset($_POST['Simpan'])) {

		$id = $_POST['id'];
		$id_jenis_kamar = $_POST['id_jenis_kamar'];
		$banyak_kamar = $_POST['banyak_kamar'];
		$harga_sewa = $_POST['harga_sewa'];
		
		mysqli_query($conn, "UPDATE `kamar` SET `id_jenis_kamar` = '$id_jenis_kamar', `banyak_kamar` = '$banyak_kamar', `harga_sewa` = '$harga_sewa' WHERE `kamar`.`id_kamar` = '$id';");
		header('Location: kamarad.php');
	}



	$id = $_GET["id"];
	$qry = mysqli_query($conn, "SELECT * FROM kamar, jenis_kamar WHERE id_kamar = '$id' AND jenis_kamar.id_jeniskamar = kamar.id_jenis_kamar");
    
	$data = mysqli_fetch_assoc($qry);
	?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h3>Edit Kamar</h3>
 
	
	<form action="" method="post" enctype="multipart/form-data">		
		<table >
			<tr>
				<td>Tipe Kamar</td>
				<td>
					<input type="hidden" name="id" value="<?php echo $data['id_kamar'] ?>">
					: <select name="id_jenis_kamar" id="">
						<option value="<?= $data['id_jenis_kamar']?>"><?= $data['nama_kamar']?></option>
           		 <?php
           		 include "../koneksi.php";
				
            	$qry = mysqli_query($conn, "SELECT * FROM jenis_kamar");
            	while($hasil = mysqli_fetch_array($qry)){
					if ($hasil['id_jeniskamar'] !== $data['id_jenis_kamar']) {
					?>
						<option value="<?= $hasil['id_jeniskamar']?>"><?= $hasil['nama_kamar']?></option>

                    <?php
					}
				}
					?> 
                    </select>
				</td>					
			</tr>	
			<tr>
				<td>Banyak Kamar</td>
				<td><input type="number" name="banyak_kamar" value="<?php echo $data['banyak_kamar'] ?>"></td>					
			</tr>	
			<tr>
				<td>Harga Sewa</td>
				<td><input type="number" name="harga_sewa" value="<?php echo $data['harga_sewa']?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><button type="submit" name="Simpan">Edit Jurusan</button></td>					
			</tr>				
		</table>
	</form>
</body>
</html>