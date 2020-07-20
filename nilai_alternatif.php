<html>
<head>
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

		<div style="overflow-x:auto;">
		<table class="table table-bordered">
			<thead class="thead-dark">
			<tr>
				<th>Nama</th>
				<th>Demam</th>
				<th>Bintik</th>
				<th>Trombosit</th>
				<th>Nyeri Sendi</th>
				<th>Hasil lg G & lg M</th>
				<th></th>

			</tr></thead>
			<?php
			include 'koneksi.php';
			$data = mysqli_query($koneksi,"SELECT u.id_alternatif, u.nama_pasien, a.demam, a.bintik, a.trombosit, a.nyerisendi, a.lab FROM alternatif AS u INNER JOIN nilai AS a ON u.id_alternatif = a.id_alt");

			while($d = mysqli_fetch_array($data)){
				?>
				<tr>
				<td><?php echo $d['nama_pasien']; ?></td>
				<td><?php echo $d['demam']; ?></td>
				<td><?php echo $d['bintik']; ?></td>
				<td><?php echo $d['trombosit']; ?></td>
				<td><?php echo $d['nyerisendi']; ?></td>
				<td><?php echo $d['lab']; ?></td>
				<td><a href="nilai_edit.php?edit=<?php echo $d['id_alternatif'];?>" class= "btn btn-primary btn-sm fas fa-edit "> Edit</a>
				<a href="nilai_edit.php?delete=<?php echo $d['id_alternatif'];?>" class= "btn btn-danger btn-sm fas fa-trash "> Delete</a></td>
			</tr>
			<?php
			}
			?>
		</table>
			<!--<tr>
				<td>Amin</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td>
					<a href="nilai_lternatif_proses.php?edit=<?php echo $row['id_alternatif'];?>" class= "btn btn-primary btn-sm fas fa-edit "> Edit</a>
					
				</td>
			</tr>
			<tr>
				<td>mukimin</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td>
					<a href="nilai_lternatif_proses.php?edit=<?php echo $row['id_alternatif'];?>" class= "btn btn-primary btn-sm fas fa-edit "> Edit</a>
			</tr>
			<tr>
				<td>Sarimin</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td>
					<a href="nilai_lternatif_proses.php?edit=<?php echo $row['id_alternatif'];?>" class= "btn btn-primary btn-sm fas fa-edit "> Edit</a>
				</td>
			</tr>-->
		</table>
	</div>

	<div class="col-sm-4 card mx-auto" >
		<div class="card-header">Menambah Data Pasien</div>
		<div class="panel-body mx-auto">
			 <form action="nilai_alternatif_proses.php" method="POST" class="was-validated">
				 <div class="form-group">
    				<label for="nama">Nama</label>
    				<input type="text" class="form-control" id="nama" placeholder="Masukkan Nama Pasien" name="nama" required >
    				<div class="valid-feedback"></div>
    				<div class="invalid-feedback">Tolong Diisi</div>
  				</div>
  				<div class="form-group">
  					<br>
    				<label for="id_pasien">Hasil lg G & lg M:</label>
    				<br>
    				<div class="form-check-inline">
    					<label class="form-check-label">
    						<input type="radio" class="form-check-input" name="r_lab" value="Positif"> Positif
    					</label>
    				</div>
    				<div class="form-check-inline">
    					<label class="form-check-label">
    						<input type="radio" class="form-check-input" name="r_lab" value="Negatif"> Negatif
    					</label>
    				</div>
  				</div>
  				<div class="form-group">
    				<label for="nama">Trombosit</label>
    				<input type="number" class="form-control" name="trombosit" min="100000" max="500000" placeholder="Masukkan jumla Trombosit Pasien" required>
    				<div class="valid-feedback"></div>
    				<div class="invalid-feedback"></div>
  				</div>
  				<div class="form-group">
    				<label for="id_pasien">Demam</label>
    				<input type="number" class="form-control" name="demam" min="30" max="50" placeholder="Masukkan Suhu Pasien" name="id_pasien" required >
    				<div class="valid-feedback"></div>
    				<div class="invalid-feedback"></div>
  				
  				<div class="form-group">
    				<label for="id_pasien">Nyeri Sendi</label>
    				<br>
    				<div class="form-check-inline">
    					<label class="form-check-label">
    						<input type="radio" name="r_nyeri" class="form-check-input" value="Ya"> Ya
    					</label>
    				</div>
    				<div class="form-check-inline">
    					<label class="form-check-label">
    						<input type="radio" name="r_nyeri" class="form-check-input" value="Tidak"> Tidak
    					</label>
    				</div>
  				</div>
  				<div class="form-group">
    				<label for="id_pasien">Bintik Merah</label>
    				<br>
    				<div class="form-check-inline">
    					<label class="form-check-label">
    						<input type="radio" name="r_bintik" class="form-check-input" value="Ada"> Ya
    					</label>
    				</div>
    				<div class="form-check-inline">
    					<label class="form-check-label">
    						<input type="radio" name="r_bintik" class="form-check-input" value="Tidak"> Tidak
    					</label>
    				</div>
  				</div>
				<br>
				<button type="submit" class="btn btn-success" name="submit"><span class="fas fa-check-circle"></span> Tambah </button></div>
			</form> 
		</div>	
	</div>

</div>
</body>
</html>