<?php
	include("connect.php");
	$id = $_GET['id'];
	mysql_query("delete from tb_barang where id='$id'")or die (mysql_error());
	header("location:home.php?pesan=hapus");
?>