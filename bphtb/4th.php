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
	<img width="300px" src="images/4.jpg"> <img width="300px" src="images/44.jpg"><img width="300px" src="images/444.jpg">
	<div class="col-md-6 text-left">
			<h4><b>Usia Anak 4 Tahun</b></h4>
		</div>
<br><br><br>Pada usia 4 tahun, hari-hari si Kecil penuh dengan warna-warni, energi, dan keseruan kehidupan sosial. Namun, si Kecil akan menyatakan ketidaksukaannya terhadap sesuatu dengan jelas. Ketahui selengkapnya di sini.</br>



<br>Perkembangan si Kecil</br>

<br>Usia ini merupakan tahun yang penuh warna-warni, enerjik, dan serunya kehidupan sosial si Kecil. Kemampuan dasarnya, seperti berlari, menggambar, menumpuk barang, atau berbicara, sudah bisa ia pergunakan dengan baik. Walau begitu, si Kecil mungkin terlihat mudah frustasi dengan kegiatan yang membutuhkan motorik halusnya, seperti mengancing baju atau mengikat tali sepatu. Temani dan bantu si Kecil setiap ia merasa frustasi, dan semangati si Kecil untuk terus mencoba lagi.

Peraturan yang jelas membantunya menjalani hari-hari. Bantu si Kecil melatih dasar pola berpikirnya dengan mengatur barang-barang yang ada di sekitarnya, seperti menggolongkan barang berdasarkan warna, bentuk atau tempat.

Rasa penasaran akan menguasai si Kecil, dan otaknya akan berusaha mencari koneksi antara satu hal dengan hal lain. Kosakatanya yang semakin berkembang pun membuatnya ingin tahu lebih banyak dan mengembangkan dunianya. Cobalah untuk menjawab pertanyaannya dengan singkat dan manis, karena ia belum membutuhkan jawaban yang detail. Bila Ibu merasa capek menjawab pertanyaannya, coba tanyakan pendapatnya mengenai jawaban dari pertanyaan tersebut.

Si Kecil akan menyatakan ketidaksukaannya terhadap sesuatu dengan jelas, termasuk makanannya. Walau begitu, jangan menyerah dalam mengenalkan makanan baru. Bila si Kecil merasa tidak apa apa untuk memilih makanannya, maka ia akan terus memilih makanan dan akan sulit untuk menjaga keseimbangan nutrisinya. Mulailah dengan porsi kecil dan jaga kesabaran Ibu. </br>

<br>Peran Ibu</br>

<br>Semangat si Kecil untuk melakukan semuanya sendiri, seperti makan atau memakai bajunya, jangan dipatahkan setiap kali Ibu melihat ia melakukannya dengan salah atau lamban. Bantu dia secara perlahan. Pilihlah pakaian yang mudah dikenakan, serta makanan yang tidak repot untuk dimakan agar mengurangi rasa frustasinya. Tetap dampingi si Kecil saat menyikat gigi, mandi, dan menyisir rambutnya.

Manfaatkan waktu Ibu untuk mengecek apakah imunisasi nya sudah sesuai jadwal. Seiring kesenangannya dalam mengeksplorasi dunia luar, tetap jaga imunitas si Kecil agar tidak mudah terserang penyakit, terutama akibat perubahan cuaca yang drastis. Kebiasaan makan yang sehat, seperti rajin sarapan setiap pagi akan membantu si Kecil dalam menjaga daya tahan tubuhnya.

Ajari kebiasaan sehat dengan menyontohkannya. Tunjukkan kebiasaan Ibu memakan sayur, agar si Kecil bisa dengan mudah menirunya. Hindari kebiasaan membedakan makanan "ini makanan Ibu" dan "makanan si Kecil".

Tidak perlu takut mengatakan tidak pada si Kecil. Memberi batasan adalah tanggung jawab Ibu. Sadari bahwa tidak ada anak yang suka diberi kata "tidak", namun disiplin itu penting untuk perkembangan si Kecil, dan Ibu tidak mungkin bisa menyenangkan dan mengikuti mau si Kecil setiap saat.

Bila ada perubahan pada rutinitas si Kecil, seperti Ibu tidak bisa membacakan cerita sebelum tidur karena harus bekerja, berikan pemberitahuan sebelumnya sehingga bisa lebih mudah diterima oleh si Kecil dan mengurangi kemungkinan si Kecil ngambek.</br>

<br>Yang perlu diperhatikan</br>

<br>Bila Ibu menemukan tanda-tanda di bawah ini pada si Kecil, segera konsultasikan dengan dokter anak Ibu:

<li>Tidak bisa melempar bola</li>
<li>Tidak bisa melompat di tempat</li>
<li>Tidak bisa memegang krayon di antara jempol dan telunjuknya</li>
<li>Kesulitan dalam mencorat-coret</li>
<li>Masih menangis kencang setiap kali Ibu dan Ayah pergi</li>
<li>Tidak tertarik terhadap mainan dan teman sebayanya</li>
<li>Tidak merespon terhadap orang-orang di luar keluarga</li>
<li>Tidak bermain dengan imajinasinya</li>
<li>Tidak bisa menggunakan kalimat panjang</li>
<br><b>Menolak berpakaian, tidur, atau menggunakan toilet.</br></b>

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