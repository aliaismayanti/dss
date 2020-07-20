<?php
$mysqli = new mysqli('localhost', 'root', '', 'db_dbd') or die(mysqli_error($mysqli));

$update=false;
$id=0;

if(isset($_GET['edit'])){
	$id = $_GET['edit'];
	$update=true;
	$edit = $mysqli->query("SELECT * FROM nilai WHERE id_alt=$id") or die($mysqli->error);
}


if(isset($_POST['submit'])){
	$nama=$_POST['nama'];
	$demam=$_POST['demam'];
	$bintik=$_POST['r_bintik'];
	$trombo=$_POST['trombosit'];
	$nyeri=$_POST['r_nyeri'];
	$lab=$_POST['r_lab'];

	$mysqli->query("INSERT INTO alternatif (nama_pasien) VALUES('$nama');") or die($mysqli->error());
	$mysqli->query("INSERT INTO nilai (id_nilai, id_alt,demam, bintik, trombosit, nyerisendi, lab) VALUES(LAST_INSERT_ID(),LAST_INSERT_ID(),'$demam','$bintik','$trombo','$nyeri','$lab');") or die($mysqli->error);
	$mysqli->query("INSERT INTO nilai_konfersi (id_konfersi, id_nilai2, kc1, kc2, kc3, kc4, kc5) VALUES(LAST_INSERT_ID(),LAST_INSERT_ID(),IF($demam >= 38, 2,1), IF('$bintik' = 'Ada', 2,1), IF($trombo < 150000, 1,2), IF('$nyeri' = 'Ya', 2,1),IF('$lab' = 'Positif', 2,1));") or die($mysqli->error);
	header("location: nilai_alternatif.php");
}

if(isset($_POST['update'])){
	$id=$_POST['id'];
	$lab=$_POST['r_lab'];
	$trombosit=$_POST['trombosit'];
	$demam=$_POST['demam'];
	$nyeri=$_POST['r_nyeri'];
	$bintik=$_POST['r_bintik'];
	$mysqli->query("UPDATE nilai SET demam=$demam, bintik='$bintik', trombosit=$trombosit, nyerisendi='$nyeri', lab='$lab' WHERE id_alt=$id") or die($mysqli->error);
	$mysqli->query("UPDATE nilai_konfersi SET  kc1 = IF($demam >= 38, 2,1), kc2 = IF('$bintik' = 'Ada', 2,1), kc3 = IF($trombosit < 150000, 1,2), kc4 = IF('$nyeri' = 'Ya', 2,1), kc5 = IF('$lab' = 'Positif', 2,1) WHERE id_konfersi = $id ") or die($mysqli->error);
	header("location: nilai_alternatif.php");
}

if(isset($_GET['delete'])){
	$id = $_GET['delete'];
	$mysqli->query("DELETE FROM preferensi WHERE id_alt2 = $id") or die($mysqli->error);
	
	$mysqli->query("DELETE FROM nilai_konfersi WHERE id_konfersi = $id") or die($mysqli->error);
	$mysqli->query("DELETE FROM nilai WHERE id_nilai = $id") or die($mysqli->error);
	$mysqli->query("DELETE FROM alternatif WHERE id_alternatif = $id") or die($mysqli->error);
	




	

	
	
	header("location: nilai_alternatif.php");
}
?>
