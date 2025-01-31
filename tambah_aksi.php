<?php

    include 'koneksi.php';

    //menangkap data yang di kirim dari form
    $id= $_POST['id'];
    $nama_buku= $_POST['nama_buku'];
    $quantity= $_POST['quantity'];
    $genre= $_POST['genre'];



    //menginput data ke database
    mysqli_query($koneksi,"insert into buku3 values('$id','$nama_buku','$quantity','$genre')");

    //mengalihkan halaman kembali ke i
    header("location:anggota.php");
    ?>