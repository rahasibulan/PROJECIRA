<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form tambah buku</title>
    
</head>
<body>
    <h2>CRUED DATA BUKU</h2>
    </br>
    <a href="anggota.php">KEMBALI</a>
    <br/>
    <br/>
    <h3>TAMBAH DATA BUKU</h3>
    <form method="POST" action="tambah_aksi.php">
        <table>
        <tr>
                <td>id</td>
                <td><input type="text" name="id"></td>
            </tr>
            <tr>
                <td>nama_buku</td>
                <td><input type="text" name="nama_buku"></td>
            </tr>
            <tr>
               <td>quantity</td>
               <td><input type="text" name="quantity"></td>
            </tr>
            <tr>
              <td>genre</td>
              <td><input type="text" name="genre"></td>
            </tr>
            <tr>
            <td><input type="submit" value="SIMPAN"></td>
            </tr>
</table> 
</form>
</body>
</html>