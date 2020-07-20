<html>
<head>
	  <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
</head>

<body>
<div class="container">
	
	<nav class="navbar navbar-expand-sm bg-light navbar-light" style="height:70px">
		<div class="container-fluid">
		<img src="logo2.png" style="width:100px;height:50px;">
		<ul class="nav navbar-nav navbar-right">
			<li class="nav-item active">
				<a class="nav-link" href="home.php">Home</a>
			</li>
			<li class="nav-item active">
				<a class="nav-link" href="nilai_alternatif.php">Alternatif</a>
			</li>
			<li class="nav-item ">
				<a class="nav-link" href="kriteria.php#">Kriteria</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="hasil.php">Hasil</a>
			</li>
		</ul>
	</div>
	</nav>
					
		<br>
		<br>
		<br>
		<br>
	<div class="card">
		<div class="card-header">Hasil Analisa</div>
		<div class="panel-body">
		
		<table class="table table-bordered">
			<thead class="table-primary">
			<tr>
				<th>Nama</th>
				<th>Demam</th>
				<th>Bintik</th>
				<th>Trombosit</th>
				<th>Nyeri Sendi</th>
				<th>Hasil lg G & lg M</th>
				</tr></thread>
					<?php
			include 'koneksi.php';
			$data = mysqli_query($koneksi,"SELECT u.id_alternatif, u.nama_pasien, a.kc1, a.kc2, a.kc3, a.kc4, a.kc5 FROM alternatif AS u INNER JOIN nilai AS i ON u.id_alternatif = i.id_alt INNER JOIN nilai_konfersi AS a ON i.id_nilai = a.id_nilai2");

			while($d = mysqli_fetch_array($data)){
				?>
				<tr>
				<td><?php echo $d['nama_pasien']; ?></td>
				<td><?php echo $d['kc1']; ?></td>
				<td><?php echo $d['kc2']; ?></td>
				<td><?php echo $d['kc3']; ?></td>
				<td><?php echo $d['kc4']; ?></td>
				<td><?php echo $d['kc5']; ?></td>
				
			</tr>
			<?php
			}
			?>
		</table>
		
		</div>
	</div>

	<br>

	<div class="card">
		<div class="card-header">Normalisasi</div>
		<div class="panel-body">	
		<table class="table table-bordered">
			<thead class="thead-primary">
			<tr>
				<th>Nama</th>
				<th>C1</th>
				<th>C2</th>
				<th>C3</th>
				<th>C4</th>
				<th>C5</th>
			</tr></thead>
		<?php
			include 'koneksi.php';
			$data = mysqli_query($koneksi,"SELECT u.id_alternatif, u.nama_pasien, a.id_konfersi, a.kc1, a.kc2, a.kc3, a.kc4, a.kc5, i.id_nilai FROM alternatif AS u INNER JOIN nilai AS i ON u.id_alternatif = i.id_alt INNER JOIN nilai_konfersi AS a ON i.id_nilai = a.id_nilai2");

			$result=mysqli_query($koneksi,"SELECT SQRT(SUM(kc1*kc1)) AS uhuy1, SQRT(SUM(kc2*kc2)) AS uhuy2, SQRT(SUM(kc3*kc3)) AS uhuy3, SQRT(SUM(kc4*kc4)) AS uhuy4, SQRT(SUM(kc5*kc5)) AS uhuy5 FROM nilai_konfersi ");
			while($rw=mysqli_fetch_array ($result)){
				$um1=$rw['uhuy1'];
				$um2=$rw['uhuy2'];
				$um3=$rw['uhuy3'];
				$um4=$rw['uhuy4'];
				$um5=$rw['uhuy5'];
						}
			$z=0;
			while($d = mysqli_fetch_array($data)){
				
						  $kc2 = $d['kc2'];
						  $kc1 = $d['kc1'];
						  $kc3 = $d['kc3'];
						  $kc4 = $d['kc4'];
						  $kc5 = $d['kc5'];

				?>
				<tr>
				<td><?php $nama = $d['nama_pasien']; echo $nama ; ?></td>
				<td>
						<?php    
						  $terbagi1=round($kc1/$um1,4);
						  echo $terbagi1;
						  $a[$z]=$terbagi1;?>
				</td>
				<td>
						  <?php    
						  $terbagi2=round($kc2/$um2,4);
						  echo $terbagi2;
						  $b[$z]=$terbagi2;?>
				</td>
				<td>
						  <?php    
						  $terbagi3=round($kc3/$um3,4);
						  echo $terbagi3;
						  $c[$z]=$terbagi3;?>
				</td>
				<td>	
				<?php    
						  $terbagi4=round($kc4/$um4,4);
						  echo $terbagi4;
						  $dc[$z]=$terbagi4;?>
				</td>
				<td>
				<?php    
						  $terbagi5=round($kc5/$um5,4);
						  echo $terbagi5;
						  $e[$z]=$terbagi5;?>
				</td>
				
			</tr>
			<?php
			$z++;}
			?>
		</table>
		</div>
	</div>

	<br>

	<div class="card">
		<div class="card-header">Normalisasi Terbobot</div>
		<div class="panel-body">
		<div style="overflow-x:auto;">		
		<table class="table table-bordered">
			<thead class="thead-light">
			<tr>
				<th>Nama</th>
				<th>C1</th>
				<th>C2</th>
				<th>C3</th>
				<th>C4</th>
				<th>C5</th>
				
			</tr></thead>
			<?php
			include 'koneksi.php';
			$data = mysqli_query($koneksi,"SELECT u.id_alternatif, u.nama_pasien, a.kc1, a.kc2, a.kc3, a.kc4, a.kc5 FROM alternatif AS u INNER JOIN nilai AS i ON u.id_alternatif = i.id_alt INNER JOIN nilai_konfersi AS a ON i.id_nilai = a.id_nilai2");
$v=0;
$min2=0;
$max2=0;
			while($d = mysqli_fetch_array($data)){
				?>
				<tr>
				<td><?php echo $d['nama_pasien']; ?></td>
				<td><?php $normbot1[$v] = round($a[$v]*25,4); echo $normbot1[$v]; ?></td>
				<td><?php $normbot2[$v] =round($b[$v]*10,4); echo $normbot2[$v]; ?></td>
				<td><?php $normbot3[$v] =round($c[$v]*30,4); echo $normbot3[$v]; ?></td>
				<td><?php $normbot4[$v] =round($dc[$v]*30,4); echo $normbot4[$v];  ?></td>
				<td><?php $normbot5[$v] =round($e[$v]*5,4); echo $normbot5[$v]; ?></td>
				
			</tr>

			<?php
			$v++;
			}?>
		</table>
		</div>
		</div>
	</div>

	<br>

	<div class="card">
		<div class="card-header">Matriks Solusi Ideal</div>
		<div class="panel-body">
		<div style="overflow-x:auto;">		
		<table class="table table-bordered">
			<thead class="thead-light">
			<tr>
				<th></th>
				<th>C1</th>
				<th>C2</th>
				<th>C3</th>
				<th>C4</th>
				<th>C5</th>
			</tr></thead>
				<tr>
				<td>A+</td>
				<td>
					<?php echo round(max($normbot1),4);
						  ?>
				</td>
				<td>
					<?php echo round(max($normbot2),4);
						  ?>
				</td>
				<td>
				<?php echo round(min($normbot3),4);
						 ?>
				</td>
				<td>	
				<?php echo round(max($normbot4),4);
						 ?>
				</td>
				<td>
				<?php echo round(max($normbot1),4);
						  ?>
				</td>
			</tr>
			<tr>
				<td>A-</td>
				<td>
					<?php 
						  echo round(min($normbot1),4);?>
				</td>
				<td>
					<?php 
						  echo round(min($normbot2),4);?>
				</td>
				<td>
				<?php 
						  echo round(max($normbot3),4);?>
				</td>
				<td>	
				<?php 
						  echo round(min($normbot4),4);?>
				</td>
				<td>
				<?php 
						  echo round(min($normbot5),4);?>
				</td>
			</tr>
		</table>
		</div>
		</div>
	</div>

	<br>

	<div class="card">
		<div class="card-header">Jarak Solusi</div>
		<div class="panel-body">
		<div style="overflow-x:auto;">		
		<table class="table table-bordered">
			<thead class="thead-light">
			<tr>
				<th>Nama</th>
				<th>D+</th>
				<th>D-</th>
				
			</tr></thead>
			<?php
			include 'koneksi.php';
			$data = mysqli_query($koneksi,"SELECT u.id_alternatif, u.nama_pasien, a.kc1, a.kc2, a.kc3, a.kc4, a.kc5 FROM alternatif AS u INNER JOIN nilai AS i ON u.id_alternatif = i.id_alt INNER JOIN nilai_konfersi AS a ON i.id_nilai = a.id_nilai2");
$h=0;

			while($d = mysqli_fetch_array($data)){
				?>
				<tr>
				<td><?php echo $d['nama_pasien']; ?></td>
				<td><?php $bot1[$h] = sqrt(pow($normbot1[$h]-round(max($normbot1),4),2)+pow($normbot2[$h]-round(max($normbot2),4),2)+pow($normbot3[$h]-round(min($normbot3),4),2)+pow($normbot4[$h]-round(max($normbot4),4),2)+pow($normbot5[$h]-round(max($normbot5),4),2)); echo $bot1[$h]; ?></td>
				<td><?php $bot2[$h] = sqrt(pow($normbot1[$h]-round(min($normbot1),4),2)+pow($normbot2[$h]-round(min($normbot2),4),2)+pow($normbot3[$h]-round(max($normbot3),4),2)+pow($normbot4[$h]-round(min($normbot4),4),2)+pow($normbot5[$h]-round(min($normbot5),4),2)); echo $bot2[$h]; ?></td>
			</tr>
			<?php
			$h++;
			}?>
		</table>
		</div>
		</div>
		</div><br>

		<div class="card">
		<div class="card-header">Nilai Preferensi</div>
		<div class="panel-body">
		
		<table class="table table-bordered">
			<thead class="table-primary">
			<tr>
				<th>Nama</th>
				<th>V</th>
				
				</tr></thread>
					<?php
			include 'koneksi.php';
			$data = mysqli_query($koneksi,"SELECT u.id_alternatif, u.nama_pasien,a.id_konfersi, a.kc1, a.kc2, a.kc3, a.kc4, a.kc5 FROM alternatif AS u INNER JOIN nilai AS i ON u.id_alternatif = i.id_alt INNER JOIN nilai_konfersi AS a ON i.id_nilai = a.id_nilai2");
$g=0;
			while($d = mysqli_fetch_array($data)){
				?>
				<tr>
				<td><?php echo $d['nama_pasien']; ?></td>
				<td><?php $preferensi[$g] = $bot2[$g]/($bot2[$g]+$bot1[$g]); echo $preferensi[$g]; ?></td>
				<?php $nm=$d['id_konfersi']; mysqli_query($koneksi,"INSERT INTO preferensi (id_pref,preferensi,id_alt2) VALUES ('$g'+1,'$preferensi[$g]','$nm') ON DUPLICATE KEY UPDATE preferensi='$preferensi[$g]'"); ?>
				
			</tr>
		<?php
				//$nm=$d['id_konfersi'];
			//$sql2=mysqli_query($koneksi,"INSERT INTO preferensi (id_alt2,preferensi) VALUES ('$nm','$preferensi[$g]')");
			$g++;}
			?>
		</table>
		
		</div>
	</div>

		
</div>


<div class="card">
		<div class="card-header">Perankingan</div>
		<div class="panel-body">
		
		<table class="table table-bordered">
			<thead class="table-primary">
			<tr>
				<th>Nama</th>
				<th>V</th>
				<th>Ranking</th>
				
				</tr></thread>
					<?php
			include 'koneksi.php';
			$data = mysqli_query($koneksi,"select preferensi, nama_pasien from preferensi inner join alternatif on id_alt2 = id_alternatif order by preferensi desc ");
$no = 1;
			while($d = mysqli_fetch_array($data)){
				?>
				<tr>
				<td><?php echo $d['nama_pasien']; ?></td>
				<td><?php echo$d['preferensi'];?></td>
				<td><?php echo $no++; ?></td>
				
				
			</tr>
		<?php
				//$nm=$d['id_konfersi'];
			//$sql2=mysqli_query($koneksi,"INSERT INTO preferensi (id_alt2,preferensi) VALUES ('$nm','$preferensi[$g]')");
			}
			?>
		</table>
		
		</div>
	</div>

		
</div>


		
</body>
</html>

