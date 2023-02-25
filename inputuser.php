<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
    <table>
        <tr>
            <td>Username</td>
            <td> : <input type="text" name="username"></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td> : <input type="text" name="nama"></td>
        </tr>
        <tr>
            <td>level</td>
            <td> : <input type="radio" name="level" value="resepsionis">Resepsionis
                <input type="radio" name="level" value="admin">Admin
            </td>

        </tr>
        <tr>
            <td>Password</td>
            <td> : <input type="text" name="password"></td>
        </tr>
        <tr>
            <td><button name="tambah">Tambah</button></td>
        </tr>
    </table>
    </form>
    <?php
    include "koneksi.php";
    if(isset($_POST['tambah'])){
    mysqli_query($conn, "INSERT INTO user set
    username = '$_POST[username]',
    nama = '$_POST[nama]',
    level = '$_POST[level]',
    password = '$_POST[password]'
    ");
    }
    ?>
    Sudah Ada Akun?<a href="index.php">Log in</a>
</body>
</html>