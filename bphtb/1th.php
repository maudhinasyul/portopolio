<?php

session_start();
session_destroy();
?>

<?php
include_once 'includes/config.php';

$config = new Config();
$db = $config->getConnection();
	
if($_POST){
	
	include_once 'includes/login.inc.php';
	$login = new Login($db);

	$login->userid = $_POST['username'];
	$login->passid = md5($_POST['password']);
	
	if($login->login()){
		echo "<script>location.href='index.php'</script>";
	}
	
	else{
		echo "<script>alert('Username atau Password Salah')</script>";
	}
}
?>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/dataTables.bootstrap.min.css" rel="stylesheet">

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="images/logo.jpg"/>
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Metode SAW (Simple Additive Weighting) : Sistem Pendukung Keputusan</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body style="background: #ffffff url(images/back1.jpg) left bottom fixed;">
  
	<nav class="navbar navbar-inverse navbar-static-top">
	  <div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
		<br>
		  <img src="images/logo.jpg" width="60px" align="left" >
		  <a class="navbar-brand" href="#"><h4><b>&nbsp;&nbsp;&nbsp;Posyandu Flamboyan II</b></h4></a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		  <ul class="nav navbar-nav navbar-right"><br>
			<li><a href="#"><h4><b>SKRIPSI 2019</b></h4></a></li>
		  </ul>
		</div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>
  
    <div class="container">
	
	 





<?php //////////////////////////////////////////////////// bstes /////////////////////////////////////?>

<div class="well">
<div class="row">

		<div class="col-md-6 text-left">
			<h4><b>Edukasi Perkembangan Balita</b></h4>
		</div>
		
	</div>
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		  <ul class="nav navbar-nav">
			<li><a href="1th.php"><b style="color: blue"><i class="glyphicon glyphicon-list"></i>&nbsp;&nbsp;usia 1 tahun</b></a></li>
			<li><a href="2th.php"><b style="color: blue"><i class="glyphicon glyphicon-list"></i>&nbsp;&nbsp;usia 2 tahun </b></a></li>
			<li><a href="3th.php"><b style="color: blue"><i class="glyphicon glyphicon-list"></i>&nbsp;&nbsp;usia 3 tahun</b></a></li>
			<li><a href="4th.php"><b style="color: blue"><i class="glyphicon glyphicon-list"></i>&nbsp;&nbsp;usia 4 tahun</b></a></li>
			<li><a href="5th.php"><b style="color: blue"><i class="glyphicon glyphicon-list"></i>&nbsp;&nbsp;usia 5 tahun</b></a></li>
			<li><a href="login.php"><b style="color: blue"><i class="glyphicon glyphicon-off"></i>&nbsp;&nbsp;Kembali</b></a></li>
		  </ul>

		</div><!-- /.navbar-collapse -->
	
	<br/>
	<img width="300px" src="images/1.jpg"> <img width="300px" src="images/11.jpg"><img width="300px" src="images/111.jpg">
	<div class="col-md-6 text-left">
			<h4><b>Usia Anak 1 Tahun</b></h4>
		</div>

	<br><br><br>Pada usia 1 tahun, si Kecil dapat beradaptasi secara cepat dan ingin melakukan semuanya sendiri. Kesabaran adalah kunci utama dalam membantu perkembangan si Kecil saat ini. Ketahui selengkapnya di sini.</br>

<br>Perkembangan Si Kecil

<br>Memasuki tahun keduanya, akan ada banyak kejutan yang ditunjukkan si Kecil dalam perkembangannya. Dia belajar dan beradaptasi dengan cepat dengan lingkungannya. Si Kecil juga mulai aktif mengeksplor lingkungannya, dan tertarik terhadap berbagai benda di sekitarnya.

Tahun ini penuh dengan aktivitasnya menggunakan kedua kakinya untuk menjelajahi dunia sekitar. Si Kecil juga sudah mulai aktif memanjat, dan kemampuan berbahasanya terus berkembang. Dia juga sudah mampu menyadari perintah dari Ibu, dan mengikutinya.

Si Kecil mulai ingin melakukan semuanya sendiri: memakai pakaiannya, memberi makan dirinya sendiri, dan mencuci tangannya. Ibu akan mulai menyadari tanda apakah si Kecil kidal atau tidak. Dia juga sudah mulai berani melepaskan diri dari Ibu dan bermain dengan orang lain.

<br>Peran Ibu</br>

<br>Latih kemampuan verbalnya dengan menjelaskan emosi lewat kata-kata, menanyakan pertanyaan, dan mengajak ngobrol tentang buku yang Ibu baca. Tanyakan pendapat si Kecil dan jawab pertanyaannya mengenai dunia di sekitarnya.

Ibu sudah bisa mulai mengajari si Kecil untuk mengenal huruf dan angka, serta mengenali bagian tubuhnya dan nama benda-benda yang familiar untuk si Kecil.

Berhati-hatilah dalam menegur si Kecil saat dia menggunakan kata-kata dengan salah. Ibu bisa mengulang kembali ucapannya dengan kata-kata yang benar. Ketika si Kecil menunjuk ke arah benda yang dia inginkan, latih si Kecil untuk meminta benda tersebut dengan cara yang baik.

Dukung si Kecil dalam bermain. Ajak dia untuk mengatur mainannya berdasarkan kategori, seperti kategori warna. Biarkan si Kecil berlatih makan sendiri menggunakan alat makan dan minum lewat gelasnya.

Pastikan si Kecil memiliki banyak waktu di luar rumah. Ibu sudah bisa mengajaknya bermain di taman atau di kebun binatang untuk berjalan, berlari, dan bebas mengeksplor dunia sekitar. Rajin-rajinlah melatih kebiasaan baik dengan memberikannya perhatian dan pujian.

Kesabaran adalah kunci utama dalam membantu perkembangan si Kecil. Ingat, dia masih beradaptasi dalam mempelajari bagaimana cara mengontrol dan mengekspresikan dirinya sendiri.

Yang Perlu Diperhatikan

Perkembangan setiap anak memang berbeda-beda, namun Ibu bisa mengkonsultasikan ke dokter apabila si Kecil:

<br>Belum bisa berjalan</br>
<li>Tidak mengerti kegunaan dari barang-barang yang sering dia lihat</li>
<li>Tidak mengucapkan setidaknya 6 kata</li>
<li>Tidak mengikuti ucapan dan aksi orang sekitarnya</li>
<li>Tidak mengikuti instruksi yang mudah</li>
<li>Melupakan kemampuan yang baru dia pelajari dengan mudah</li>

</div>	


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-1.11.3.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	
    <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/dataTables.bootstrap.min.js"></script>
    <script>
    	$(document).ready(function() {

    		$('#tabeldata').DataTable();

		});
    </script>
 
  </body>
</html>