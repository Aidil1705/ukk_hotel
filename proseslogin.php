<?php
    session_start();
    include "koneksi.php";
    
    if(isset($_POST['masuk'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $qry = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username' AND password = '$password'");
    if(mysqli_num_rows($qry) > 0){
 
        $data = mysqli_fetch_assoc($qry);
        if($data['level']=="resepsionis"){
            $_SESSION['username'] = $username;
            $_SESSION['level'] = "resepsionis";
            header("location:resepsionis/index.php");

        }else if($data['level']=="admin"){
            $_SESSION['username'] = $username;
            $_SESSION['level'] = "admin";
            header("location:admin/index.php");
        
        }else{
            header("location:index.php?pesan=gagal");
        }	
    }
}
?>