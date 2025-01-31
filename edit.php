<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit data</title>
</head>
<body>
    <h2>EDIT DATA BUKU</h2>
    <?php
       include'koneksi.php';
       $id = $_GET['id'];
       $data = mysqli_query($koneksi,"SELECT * FROM buku3 WHERE id ='$id'");
      while($d = mysqli_fetch_array($data)){
       ?>

    <form method="POST" action="update.php">
        <table>
            <tr>
                <td>id</td>
                <td><input type="number" name="id" value="<?php echo $d['id']; ?>"></td>
            </tr>
            <tr>
               <td>nama_buku</td>
               <td><input type="text" name="nama_buku" value="<?php echo $d['nama_buku']; ?>"></td>
            </tr>
            <tr>
                <td>quantity</td>
                <td><input type="number" name="quantity" value="<?php echo $d['quantity']; ?>"></td>
            </tr>
            <tr>
                <td>genre</td>
                <td><input type="text" name="genre" value="<?php echo $d['genre']; ?>"></td>
            </tr>
            <tr>
            <td><input type="submit" value="SIMPAN"></td>
            </tr>
    </table>
    </form>
    <?php
      }
    ?>
</body>
</html>