<html>
	<head>
		<title>Kelola Data Barang</title>
		<link rel="stylesheet" type="text/css" href="css.css"/>
	</head>
		<body>
		<h3><div class= "jdl">KELOLA DATA BARANG</div></h3>
		<br>
		<br>
		
		<table width= 80% height= 5% align="center">
			<tr>
				<td><b> Data Barang</td></b>
				<td><p align="right"><a href = "Input.php"><Button class ="btn">Tambah</a></Button>
			</tr>
		
		<br>
		<table width= 80% height= 40% align= "center" border = 1 cellpadding= 0 cellspacing= 0>
			<tr align= "center">
				<td>Kode</td>
				<td>Nama</td>
				<td>Harga</td>
				<td>Aksi</td>
			</tr>
			
			<?php
			//koneksi ke database 
			include ("connect.php");
			//mengambil data dari tabel barang
			$tampil= mysql_query("select * from tb_barang ");
			while ($data= mysql_fetch_array ($tampil)){
			?>
			
			<tr align = "center">
				<td><?php echo $data['kode']; ?> </td>
				<td><?php echo $data['nama']; ?> </td>
				<td><?php echo $data['harga']; ?> </td>
				<td class = "text"><a href= "Edit.php?id=<?php echo $data ['id']; ?>">Edit |</a>
				<a href = "hapus.php?id=<?php echo $data ['id'];?>"> Hapus</a></td>
			</tr>
			<?php
			}
			?>
			<?php session_start();
	if(!isset($_SESSION['username'])) {
	header('location:login.php'); }
	else { $username = $_SESSION['username']; }
	require_once("config.php");
	$query = mysql_query("SELECT * FROM user WHERE username = '$username'");
	$hasil = mysql_fetch_array($query);
?>
			<table align="center">
			<br>
			<tr>
			<td align="center"><a href="logout.php"><Button class ="btn">LOGOUT</a></Button>
			</br>
			</tr>
			</td>
			</table>
			
			
		</table>
			
		
	
</body>
</html>