<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman anggota</title>
</head>
<body>
   <center><h2>SELAMAT DATANG ANGGOTA</h2></center>
   <center><a href="tambah.php">+ TAMBAH BUKU</a></center>
	<br/>
	<br/>
	<table border="1">
		<tr>
		<center><th>id</th></center>
			<center><th>nama buku</th></center>
		<center><th>quantity</th></center>
			<center><th>genre</th></center>
			<center><th>Opsi</th></center>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from buku3");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
			  <td><?php echo $d['id']; ?></td>
				<td><?php echo $d['nama_buku']; ?></td>
				<td><?php echo $d['quantity']; ?></td>
				<td><?php echo $d['genre']; ?></td>
				<td>
				<a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
				<a href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
</body>
</html>