<?php
$host_db ="localhost";
$user_db ="root";
$pass_db ="";
$db =" buku"
$koneksi = mysqli_connect($host_db, $user_db, $pass_db, $db);

if(mysql_connet_error()){
    echo"alamat database error"mysqli_connect-error();
}
?>