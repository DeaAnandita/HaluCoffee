<?php
//Membuat Session

session_start();
include "dbConnection.php";

if(isset($_POST['login'])){
    $username = $_POST['username'];
    $pass = ($_POST['pass']);
    $query = mysqli_query($koneksi,"SELECT * FROM tb_user WHERE username='$username'and pass='$pass'");
    $result = mysqli_num_rows($query);

    if($result > 0){
        $data = mysqli_fetch_assoc($query);

        if($data['role']=="pelanggan"){
 
            $_SESSION['username'] = $username;
            $_SESSION['role'] = "pelanggan";
            header("location:main.php");

        }else if($data['role']=="staff"){
            $_SESSION['username'] = $username;
            $_SESSION['role'] = "staff";
            header("location:list_pesanan.php");
    }else{
        echo"Database User Kosong";
    }
    }
}


?>