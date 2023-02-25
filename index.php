<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Log in</title>
</head>
<body>
    <center>
    <div class="box">
    <h2>Silahkan Login </h2>
        <img src="img/profil.jpg" width="100px" class="profil">
        <table>
            <form action="proseslogin.php" method="Post">
            <tr>
                <td><input type="text" name="username" placeholder="Masukkan Nama"></td>
            </tr>
            <tr>
                <td><input type="password" name="password" placeholder="Masukkan Password"></td>
            </tr>
            <tr>
                <td ><input class="tombol" type="submit" name="masuk" value="masuk"></td>
            </tr>
            </form>
        </table>
        <p class="text"><a href="tamu/index.php">Tamu Tekan Disini</a></p>
        <p>Belum punya akun? <a href="inputuser.php">Daftar disini</a></p>
      
    </div>
    </center>
</body>
</html>