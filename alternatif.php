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
			<li class="nav-item">
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
		<div class="card-header"> Data pasien</div>
		<div class="panel-body">
		<div style="overflow-x:auto;">	
		<table class="table table-bordered">
			<thead class="thead-light">
			<tr>
				<th>ID</th>
				<th>Nama</th>
				<th>Hasil lg G & lg M</th>
				<th>Trombosit</th>
				<th>Demam</th>
				<th>Nyeri Sendi</th>
				<th>Bintik Merah</th>
			</tr></thead>

			<?php
			require_once 'alternatif_proses.php'; 
			//get results from database
			$result = mysqli_query($mysqli,"SELECT * FROM alternatif");

			while ($property = mysqli_fetch_array($result)) {?>
				<tr>
				<td><?php echo $d['']; ?></td>
				<td><?php echo $d['kc1']; ?></td>
				<td><a href="nilai_edit.php?edit=<?php echo $d['id_alt'];?>" class= "btn btn-primary btn-sm fas fa-edit "> Edit</a></td>
				</tr>
			<?php}?>

		
    		
    			
			
			<!--
			<tr>
				<td>30877</td>
				<td>Amin</td>
				<td style="width:20">
				<div class="btn-group btn-group-sm">
				<a href="alternatif_edit.php" class= "btn btn-primary btn-sm fas fa-edit "></a>
				<button type="button" class= "btn btn-danger "><span class="fas fa-trash"></span></button>
				</div>
				</td>
			</tr>
			<tr>
				<td>56743</td>
				<td>mukimin</td>
				<td>
				<div class="btn-group btn-group-sm">
				<a href="nilai.php" class= "btn btn-primary btn-sm fas fa-edit "></a>
				<button type="button" class= "btn btn-danger "><span class="fas fa-trash"></span></button>
				</div>
				</td>
			</tr>udah baca berapa banyak materinya?
			<tr>
				<td>96732</td>
				<td>Sarimin</td>
				<td class="border-0">
				<div class="btn-group btn-group-sm">
				<a href="nilai.php" class= "btn btn-primary btn-sm fas fa-edit "></a>
				<button type="button" class= "btn btn-danger "><span class="fas fa-trash"></span></button>
				</div>
				</td>			
			</tr>-->
		</table>
		</div>
		</div>
	</div>

	<br><br><br>

    <div class="card mx-auto" style="width:400" >
  		<div class="card-header"> Masukkan Data</div>
		<div class="panel-body mx-auto">
			 <form action="alternatif_proses.php" method="POST"class="was-validated">
			 	<input type="hidden" name="id" value="<?php echo $id; ?>">
  				<div class="form-group">
    				<label for="nama">Nama</label>
    				<input type="text" class="form-control" id="nama" placeholder="Masukkan Nama Pasien" name="nama" value="<?php echo $nama;?>"required >
    				<div class="valid-feedback"></div>
    				<div class="invalid-feedback">Tolong Diisi</div>
  				</div>
    				<label for="id_pasien">Hasil lg G & lg M:</label>
    				<br>
    				<div class="form-check-inline">
    					<label class="form-check-label">
    						<input type="radio" name="r_lab" class="form-check-input" value="Positif"> Positif
    					</label>
    				</div>
    				<div class="form-check-inline">
    					<label class="form-check-label">
    						<input type="radio" name="r_lab" class="form-check-input" value="Negatif"> Negatif
    					</label>
    				</div>
  				
  				<div class="form-group">
    				<label for="trombosit">Trombosit</label>
    				<input type="number" class="form-control" name="trombosit" min="100000" max="200000" placeholder="Masukkan jumla Trombosit Pasien" required>
    				<div class="valid-feedback"></div>
    				<div class="invalid-feedback"></div>
  				</div>
  				
          		<div class="form-group">
            		<label for="Demam">Demam</label>
            		<input type="number" class="form-control" name="demam" min="30" max="50" placeholder="Masukkan Suhu Badan Pasien" required>
            		<div class="valid-feedback"></div>
            		<div class="invalid-feedback"></div>
          		</div>

  				<div class="form-group">
    				<label for="nyerisendi">Nyeri Sendi</label>
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
    				<label for="bintik">Bintik Merah</label>
    				<br>
    				<div class="form-check-inline">
    					<label class="form-check-label">
    						<input type="radio" name="r_bintik" class="form-check-input" value="Ada"> Ada
    					</label>
    				</div>
    				<div class="form-check-inline">
    					<label class="form-check-label">
    						<input type="radio" name="r_bintik" class="form-check-input" value="Tidak"> Tidak
    					</label>
    				</div>
    			</div>
  				<button type="submit" class="btn btn-primary" name="submit">Submit</button>
			</form> 
		</div>
		</div>

	</div>
</div>
</body>
</html>