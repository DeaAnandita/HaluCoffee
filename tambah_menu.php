<?php
include 'dbConnection.php';

if(isset($_POST['submit'])){
    $nama_menu=$_POST['nama_menu'];
    $harga_menu=$_POST['harga_menu'];
    $fileName=$_FILES['image_menu']['name'];
    $tmpName=$_FILES['image_menu']['tmp_name'];

    $query = mysqli_query($koneksi, "INSERT INTO tb_menu (nama_menu, harga_menu, image_menu) VALUES ('$nama_menu', '$harga_menu', '$fileName')");
    move_uploaded_file($tmpName,"image/".$fileName);
    if($query == FALSE){
        echo "Maaf Data Gagal Ditambahkan";
    }else{
        header("location:menu.php");
    }
    }

?>

<form action="" method="POST" autocomplete="off" enctype="multipart/form-data">
            <label for="nama_menu">Name : </label>
            <input type="text" name="nama_menu" id="nama_menu" required value=""><br>
            <label for="harga_menu">Harga : </label>
            <input type="text" name="harga_menu" id="harga_menu" required value=""><br>
            <label for="image_menu">Gambar : </label>
            <input type="file" name="image_menu" id="image_menu" value="upload" accept=".png, .jpg, .jpeg"><br />

            <button type="submit" name="submit">SUBMIT</button>
        </form>
        <br><a href="menu.php">display data</a>

