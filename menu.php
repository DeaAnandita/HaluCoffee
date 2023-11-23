<!DOCTYPE html>
<html>
<head>
        <title>DAFTAR MENU</title>
</head>
<body>
    <h2>MENU HALU COFFEE</h2>
    <br/>
    <?php
    session_start();


    include "dbConnection.php";
    $queri = mysqli_query($koneksi, "SELECT * FROM tb_menu");

    ?>
    <br/>
    <table border="1">
        <tr>
            <th>NO</th>
            <th>Gambar</th>
            <th>Nama Menu</th>
            <th>Harga</th>
        </tr>
        <?php
        include 'dbConnection.php';
        $no = 1;
        $data = mysqli_query($koneksi, "SELECT * FROM tb_menu");
        while($d = mysqli_fetch_array($data)){
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><img src="image/<?php echo $d["image_menu"]; ?>" width="100px" height="100px" title="<?php echo $d['image_menu']; ?>"></td>
                <td><?php echo $d['nama_menu']; ?></td>
                <td><?php echo $d['harga_menu']; ?></td>
            </tr>
            <?php
            }
            ?>
    </table>
</body>
</html>