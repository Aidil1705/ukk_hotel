<?php
    include "../koneksi.php";
    if (isset($_POST['Simpan'])) {
    $id_pesan = $_POST['id_pesan'];
    $status = $_POST['status'];

    mysqli_query($conn, "UPDATE pesan SET  status='$status' WHERE id_pesan='$id_pesan'");
    header("location:index.php");
    }
    ?>