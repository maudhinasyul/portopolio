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
	<img width="300px" src="images/5.jpg"> <img width="300px" src="images/55.jpg"><img width="300px" src="images/555.jpg">
	<div class="col-md-6 text-left">
			<h4><b>Usia Anak 5 Tahun</b></h4>
		</div>

	<br><br><br><br>Pada usia 5 tahun, ada banyak hal baru yang dapat dipelajari oleh si Kecil. Saat ini, Ibu perlu konsisten dalam memberi aturan kepada si Kecil. Ketahui selengkapnya di sini.</br>



<br>Perkembangan Si Kecil</br>

<br>Si Kecil sudah mulai memasuki usia sekolah TK, dan dunianya semakin berkembang besar, terutama kehidupan sosialnya. Akan ada banyak hal baru yang ia pelajari, baik dari segi kosakata, perilaku, maupun aktivitas sehari-harinya. Di bawah pengawasan Ibu, perkembangan si Kecil bisa terus dimaksimalkan terutama melalui nutrisi penunjang tumbuh kembangnya.

Secara fisik, Ibu akan menemukan betapa keseimbangannya semakin baik, dan ia sudah makin handal dalam melempar bola. Perkembangan gerak motorik kasar dan halusnya yang sangat cepat akan membantunya dalam berbagai aktivitas yang membutuhkan koordinasi tubuh yang lebih kompleks, seperti berenang, mengendarai sepeda, atau berlari rintangan. Energinya terasa tak ada habisnya, dan tidak terlihat bisa duduk tenang. Tenang saja, kegiatan fisik seperti ini membantunya mengurangi stress dan membantu melatihnya fokus.

Mungkin akan timbul kecenderungan si Kecil dalam mengadukan hal-hal yang terlihat salah di matanya. Ini pertanda bahwa sifat keadilan dalam kehidupan sosialnya mulai berkembang. Mereka mendapatkan rasa "kemenangan" dengan menyebutkan bagian yang salah. Ibu bisa mencoba melatihnya dengan menanyakan alasan dari pengaduannya dan solusi seperti apa yang menurutnya terbaik untuk menyelesaikan masalah tersebut.

Si Kecil tentunya akan sangat senang diajak pergi mengunjungi museum, planetarium, kebun binatang, akuarium, atau tempat wisata keluarga lainnya. Banyak hal baru yang bisa ia pelajari, seiring dengan rasa penasarannya yang masih tinggi. Memang, aktivitas di luar rumah tidak hanya membantunya melatih perkembangan fisiknya, juga mengembangkan kosakata dan pengetahuannya.

Walau terlihat seperti anak yang sudah besar, si Kecil tetap membutuhkan rutinitas tidurnya, ia akan menjadi mudah menggerutu dan susah untuk fokus saat melakukan kegiatan sehari-hari. Penuhi kebutuhannya dan pahami tanda-tanda jika si Kecil mulai terlihat kelelahan.</br>

<br>Peran Ibu</br>

<br>Konsistensi terhadap aturan akan sangat diperlukan untuk membantu si Kecil dalam mengerti arti disiplin. Bila si Kecil menginginkan sesuatu yang Ibu larang, berikan penjelasan serta bicarakan dengan si Kecil. Memberikannya alternatif bisa menjadi salah satu solusi yang baik.

Kadang Ibu merasa lelah untuk berkata "tidak" pada si Kecil. Ia mungkin merasakan hal yang sama. Cobalah variasi lain sehingga si Kecil tidak bersikap cuek terhadap keinginan Ibu seperti daripada mengatakan "Tidak boleh lari", Ibu bisa memberi tahu mana yang diperbolehkan: "Berjalan jika di dalam rumah."

Sediakan waktu lebih banyak untuk menemani si Kecil bermain dan mengeksplorasi dunia luar. Berikan ia ruang untuk bergerak bebas menikmati dunianya, namun tetap perhatikan gerak-gerik si Kecil dalam bersikap baik agar tidak membahayakan dirinya atau orang lain di sekitarnya.

Perlahan, si Kecil akan terlihat mulai tumbuh menjauh dari Ibu dan mulai memiliki teman baiknya sendiri. Tidak perlu khawatir, ide memiliki "teman baik" di kepalanya baru saja tertanam. Tetaplah sigap dan perhatikan pergaulannya. Bila si Kecil melakukan sesuatu atau mengatakan sesuatu yang menyakitkan pada temannya, ajarkan dia untuk membayangkan apa yang terjadi bila temannya melakukan hal yang sama kepadanya. Di usia ini, si Kecil sudah bisa mengerti rasa empati dan bisa menjadi pelajaran yang berguna seumur hidupnya.</br>

<br>Yang perlu diperhatikan</br>

<br>Jika tanda-tanda di bawah ini muncul pada si Kecil, Ibu bisa langsung mengonsultasikannya dengan dokter anak Ibu:</br>

<li>Bersikap sangat mudah takut dan kaku</li>
<li>Bersikap sangat agresif</li>
<li>Mudah terdistraksi dan tidak bisa konsentrasi terhadap suatu kegiatan lebih dari lima menit</li>
<li>Tidak tertarik bermain dengan teman sebaya</li>
<li>Menolak merespon pada orang lain</li>
<li>Tidak senang atau terus terlihat bersedih</li>
<li>Tidak aktif dalam berbagai kegiatan</li>
<li>Tidak menunjukkan variasi emosi</li>
<li>Tidak bisa membedakan fantasi dengan kenyataan</li>
<li>Tidak bisa menceritakan kegiatannya kepada orang lain</li>
<li>Tidak bisa mencuci tangannya sendiri, dan tidak bisa melepas bajunya sendiri.</li>

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