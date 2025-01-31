<?php
    include 'koneksi.php';

    $id = $_POST['id'];
    $nama_buku = $_POST['nama_buku'];
    $quantity = $_POST['quantity'];
    $genre = $_POST['genre'];


    mysqli_query($koneksi,"UPDATE buku3 SET nama_buku='$nama_buku', quantity='$quantity', genre='$genre' WHERE id='$id' ");

    header("location:anggota.php");
?>