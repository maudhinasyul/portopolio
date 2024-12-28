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
	<img width="300px" src="images/2.jpg"> <img width="300px" src="images/22.jpg"><img width="300px" src="images/222.jpg">
	<div class="col-md-6 text-left">
			<h4><b>Usia Anak 2 Tahun</b></h4>
		</div>

	<br><br><br>Pada usia 2 tahun, imajinasi si Kecil mulai berkembang pesat, begitu juga dengan kosakatanya. Namun, perhatikan jika si Kecil memiliki masalah dalam perkembangannya. Ketahui selengkapnya di sini.</br>
	
<br>Perkembangan Si Kecil</br>

<br>Imajinasi si Kecil mulai berkembang pesat. Bermain berpura-pura menjadi sesuatu (hewan, jagoan, seseorang) akan menjadi hal favoritnya, berbarengan dengan ketakutannya terhadap monster imajiner atau hal-hal biasa seperti gelap dan bunyi vacuum cleaner.</br>

Ucapannya mulai lebih jelas dan bisa dimengerti oleh orang asing. Kosakatanya pun berkembang cepat. Akan ada ratusan kata yang bisa si Kecil gunakan dari usia ini sampai si Kecil memasuki usia 3 tahun. Ibu akan menyadari perkembangan emosionalnya, seperti rasa empati dan sayang terhadap teman-temannya. Walau begitu, si Kecil mungkin tetap mengalami kesulitan dalam mengatur emosinya.

Si Kecil juga sudah mampu menaiki dan menuruni tangga, serta menemukan cara untuk menggunakan benda sekitar, seperti membuka pintu atau wadah tertutup.</br>

<br>Peran Ibu</br>

<br>Berikan kesempatan untuk si Kecil bermain dengan teman sebayanya. Tetap perhatikan pergaulannya, karena si Kecil mungkin akan membutuhkan bantuan Ibu dalam menyelesaikan masalah dan mengontrol emosinya.

Ajak si Kecil bermain sambil belajar, seperti menghitung tangga bersama, mencari pasangan mainan, dan menyebutkan bagian tubuh. Pastikan si Kecil memiliki banyak waktu untuk mengeksplor dengan kedua tangan dan kakinya.

Ajari peraturan yang mudah dan konsekuensinya dengan perlahan dan konsisten. Pastikan Ibu memberinya pujian jika dia bersikap baik.</br>

<br>Yang Perlu Diperhatikan</br>

<br>Ibu bisa segera menghubungi dokter apabila si Kecil:</br>

<br><li>Bermasalah dengan perpisahan
<li>Tidak berinteraksi dengan orang-orang di luar keluarganya</li>
<li>Tidak bermain dengan anak sebayanya</li>
<li>Menghindari kontak mata</li>
<li>Tidak mampu melempar bola, meloncat, atau menaiki tangga dengan kaki bergantian</li>
<li>Bermasalah dalam mencorat-coret</li>
<li>Tidak bisa membuat kalimat, dan sulit dimengerti oleh orang asing</li></br>
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