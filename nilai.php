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
		<img src="logo2.png" style="width:100px;height:50px;">
		<ul class="navbar-nav">
			<li class="nav-item">
				<a class="nav-link" href="home.php">Home</a>
			</li>
			<li class="nav-item dropdown">
    			<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Alternatif</a>
    			<div class="dropdown-menu">
      				<a class="dropdown-item" href="alternatif.php">Alternatif</a>
      				<a class="dropdown-item" href="nilai_alternatif.php">Nilai Alternatif</a>
    			</div>
  			</li>
			<li class="nav-item">
				<a class="nav-link" href="kriteria.php">Kriteria</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="hasil.php">Hasil</a>
			</li>
		</ul>
	</nav>
					
		<br>
		<br>
		

<div class="col-sm-4 card mx-auto" >
		<div class="card-header">Sarimin</div>
		<div class="panel-body mx-auto">
			 <form action="/action_page.php" class="was-validated">
  				<div class="form-group">
  					<br>
    				<label for="id_pasien">Hasil lg G & lg M:</label>
    				<br>
    				<div class="form-check-inline">
    					<label class="form-check-label">
    						<input type="radio" class="form-check-input" value=""> Positif
    					</label>
    				</div>
    				<div class="form-check-inline">
    					<label class="form-check-label">
    						<input type="radio" class="form-check-input" value=""> Negatif
    					</label>
    				</div>
  				</div>
  				<div class="form-group">
    				<label for="nama">Trombosit</label>
    				<input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan jumla Trombosit Pasien" required>
    				<div class="valid-feedback"></div>
    				<div class="invalid-feedback"></div>
  				</div>
  				<div class="form-group">
    				<label for="id_pasien">Demam</label>
    				<input type="text" class="form-control" id="id_pasien" placeholder="Masukkan Suhu Pasien" name="id_pasien" required >
    				<div class="valid-feedback"></div>
    				<div class="invalid-feedback"></div>
  				</div>
  				<div class="form-group">
    				<label for="id_pasien">Sakit Kepala</label>
    				<br>
    				<div class="form-check-inline">
    					<label class="form-check-label">
    						<input type="radio" class="form-check-input" value=""> Ya
    					</label>
    				</div>
    				<div class="form-check-inline">
    					<label class="form-check-label">
    						<input type="radio" class="form-check-input" value=""> Tidak
    					</label>
    				</div>
  				</div>
  				<div class="form-group">
    				<label for="id_pasien">Nyeri Sendi</label>
    				<br>
    				<div class="form-check-inline">
    					<label class="form-check-label">
    						<input type="radio" class="form-check-input" value=""> Ya
    					</label>
    				</div>
    				<div class="form-check-inline">
    					<label class="form-check-label">
    						<input type="radio" class="form-check-input" value=""> Tidak
    					</label>
    				</div>
  				</div>
  				<div class="form-group">
    				<label for="id_pasien">Bintik Merah</label>
    				<br>
    				<div class="form-check-inline">
    					<label class="form-check-label">
    						<input type="radio" class="form-check-input" value=""> Ya
    					</label>
    				</div>
    				<div class="form-check-inline">
    					<label class="form-check-label">
    						<input type="radio" class="form-check-input" value=""> Tidak
    					</label>
    				</div>
  				</div>
			</form> 
		</div>	
	</div>

</div>
	<br><br><div class="text-center">
	<button type="submit" class="btn btn-success"><span class="fas fa-check-circle"></span> Update</button></div>
</div>
</body>
</html>