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
<div class="container-fluid">
	
	<nav class="navbar navbar-expand-sm bg-light navbar-dark" style="height:70px; font-size: 14px; max-height: 50px; border-radius: 0px; background: linear-gradient(to right, #ff5858, #f857a6);">
	<div class="container-fluid">
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
				<!-- Slideshow container -->

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial;
  margin: 0;
}

* {
  box-sizing: border-box;
}

img {
  vertical-align: middle;
}

/* Position the image container (needed to position the left and right arrows) */
.container {
  position: relative;
}

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Add a pointer when hovering over the thumbnail images */
.cursor {
  cursor: pointer;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 40%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* Container for image text */
.caption-container {
  text-align: center;
  background-color: #222;
  padding: 2px 16px;
  color: white;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Six columns side by side */
.column {
  float: left;
  width: 16.66%;
}

/* Add a transparency effect for thumnbail images */
.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}
</style>
<body>

<div class="container">
  <div class="mySlides">
    <div class="numbertext">1 / 6</div>
    <img src="img/topsis.png" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">2 / 6</div>
    <img src="img/dbd.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">3 / 6</div>
    <img src="img/demam.jpg" style="width:100%">
  </div>
    
  
    
  <a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a>

  <div class="caption-container">
    <p id="caption"></p>
  </div>

 
  
</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
		<br>
		<br>
		<br>
		<br>
		
		<table class="table table-bordered">
			<thead class="thead-dark">
			<tr>
				<th>Nama</th>
				<th>Hasil lg G & lg M</th>
				<th>Trombosit</th>
				<th>Demam</th>
				<th>Nyeri Sendi</th>
				<th>Bintik Merah</th>
				
				
			</tr></thead>
			<?php
			include 'koneksi.php';
			$data = mysqli_query($koneksi,"SELECT nama_pasien,lab,trombosit,demam,nyerisendi,bintik FROM nilai
INNER JOIN alternatif ON id_alt=id_alternatif");
			while($d = mysqli_fetch_array($data)){
				?>
				<td><?php echo $d['nama_pasien']; ?></td>
				<td><?php echo $d['lab']; ?></td>
				<td><?php echo $d['trombosit']; ?></td>
				<td><?php echo $d['demam']; ?></td>
				<td><?php echo $d['nyerisendi']; ?></td>
				<td><?php echo $d['bintik']; ?></td>
			
			</tr>
			<?php
			}
			?>
		</table>
	</div>
</body>
</html>