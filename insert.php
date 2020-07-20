<?php
include 'koneksi.php';
				$qry_jumlah_a=mysqli_query($koneksi,"INSERT INTO normalisasi
SET
id_konversi = NEW.id_konfersi,
nc1 = NEW.kc1  / (SELECT (sqrt(SUM(pow((kc1),2))))FROM nilai_konfersi),
nc2 = NEW.kc2  / (SELECT (sqrt(SUM(pow((kc2),2))))FROM nilai_konfersi),
nc3 = NEW.kc3  / (SELECT (sqrt(SUM(pow((kc3),2))))FROM nilai_konfersi),
nc4 = NEW.kc4  / (SELECT (sqrt(SUM(pow((kc4),2))))FROM nilai_konfersi),
nc5 = NEW.kc5  / (SELECT (sqrt(SUM(pow((kc5),2))))FROM nilai_konfersi)");
        		$data_a=mysqli_fetch_array($qry_jumlah_a);
       			$jumlah_nilai_a=$data_a[0];
        		echo $jumlah_nilai_a;


header("location:hasil.php");
?>