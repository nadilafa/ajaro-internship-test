<html>
	<title>KELOLA DATA BARANG</title>
	<link rel="stylesheet" href="style.css">
	<center>
	
	<head>
		<h2 class = "judul">KELOLA DATA BARANG</h2>
	</head>
	
	<body>
	<table width = 60% height = 10%
		<tr>
			<td><b>Data Barang</b></td>
			<td width=10% align="center"><a href="Input.php"><button class = "button">Tambah</button></a></td>
		</tr>
	</table>
		
	<table border=1 width=60% height=5% align="center" border=1 cellpadding=0 cellspacing=0>
		<tr align="center">
			<td>Kode</td>
			<td>Nama</td>
			<td>Harga</td>
			<td>Aksi</td>
		</tr>
		
		<?php
			include("connect.php");
			//mengambil data dari tabel barang
			$tampil = mysql_query("select * from tb_barang");
			while ($data = mysql_fetch_array($tampil)) {
		?>
		
		<tr align = "center">
			<td><?php echo $data['kode']; ?></td>
			<td><?php echo $data['nama']; ?></td>
			<td><?php echo $data['harga']; ?></td>
			<td>
			<a href = "update.php?no=<?php echo $data ['id']; ?>">Edit</a>
			<a href = "hapus.php?no=<?php echo $data ['id']; ?>">Hapus</a>
		</tr>
		<?php
			}
		?>
		</table>
		<table height=20% align="center" border=0 cellpadding= 0 cellspacing= 0>
		<tr>
		<td> <a href="index.php"> <button> LOGOUT </button> </a>
		</tr>	
	</table>
</body>
</html>	