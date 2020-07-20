<?php
$mysqli = new mysqli('localhost', 'root', '', 'db_dbd') or die(mysqli_error($mysqli));

$nama='';
$update=false;
$id=0;
if(isset($_POST['submit'])){
	$nama=$_POST['nama'];

	$mysqli->query("INSERT INTO alternatif (nama_pasien) VALUES('$nama')") or die($mysqli->error);

	header("location: alternatif.php");
}

if(isset($_GET['delete'])){
	$id = $_GET['delete'];

	$mysqli->query("DELETE FROM alternatif WHERE id_alternatif=$id") or die($mysqli->error);

	header("location: alternatif.php");
}

if(isset($_GET['edit'])){
	$id = $_GET['edit'];
	$update=true;
    $mysqli->query("SELECT * FROM alternatif WHERE id_alternatif=$id") or die($mysqli->error);
	
}

if(isset($_POST['update'])){
	$id=$_POST['id'];
	$nama=$_POST['nama'];
	$mysqli->query("UPDATE alternatif SET nama_pasien='$nama' WHERE id_alternatif=$id") or die($mysqli->error);

	header("location: alternatif.php");
}

?>
