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
			<li class="nav-item">
				<a class="nav-link" href="nilai_alternatif.php">Alternatif</a>
			</li>
			<li class="nav-item active">
				<a class="nav-link" href="kriteria.php">Kriteria</a>
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
		<div class="card-header">Kriteria</div>
		<div class="panel-body">	
		<table class="table table-bordered">
			<thead class="thead-light">
			<tr>
				<th>ID</th>
				<th>Gejala</th>
				<th>Bobot</th>
				<th>keterangan</th>
			</tr></thead>
			<?php
			include 'koneksi.php';
			$data = mysqli_query($koneksi,"select * from kriteria");
			while($d = mysqli_fetch_array($data)){
				?>
				<td><?php echo $d['id_kriteria']; ?></td>
				<td><?php echo $d['nama_kriteria']; ?></td>
				<td><?php echo $d['bobot']; ?></td>
				<td><?php echo $d['keterangan']; ?></td>		
			</tr>
			<?php
			}
			?>
		</table>
		</div>
	</div>
	<br><br><br>
</div>
</body>
</html>