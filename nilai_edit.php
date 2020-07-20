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
 <br>
 <a href="nilai_alternatif.php" class= "btn btn-primary btn-sm fas fa-arrow-circle-left" style="border-radius:30px">back</a>
 <br><br>
    <div class="col-sm-4 card mx-auto" >
	<div class="card-header">Ganti data </b></div>
		<div class="panel-body mx-auto">
        <?php require_once 'nilai_alternatif_proses.php';?>
			<form action="nilai_alternatif_proses.php" method="POST" class="was-validated">
			 	<input type="hidden" name="id" value="<?php echo $id; ?>">
  				<div class="form-group">
                	<br>
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
                </div>
                  
  				<div class="form-group">
    				<label for="trombosit">Trombosit</label>
    				<input type="number" class="form-control" name="trombosit" min="100000" max="500000" placeholder="Masukkan jumla Trombosit Pasien" required>
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
				<br>
				<button type="submit" class="btn btn-success" name="update" style="border-radius:30px"><span class="fas fa-check-circle"></span> Update</button></div>
			</form> 
        </div>	
</body>
</html>