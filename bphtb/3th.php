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
	<img width="300px" src="images/3.jpg"> <img width="300px" src="images/33.jpg"><img width="300px" src="images/333.jpg">
	<div class="col-md-6 text-left">
			<h4><b>Usia Anak 3 Tahun</b></h4>
		</div>

	<br><br><br>Pada usia 3 tahun, Ibu sudah bisa melatih si Kecil potty training dan membantu Ibu melakukan pekerjaan rumah. Saat ini, Ibu bisa mengajak si Kecil memeriksa perkembangan giginya. Ketahui selengkapnya di sini.</br>



<br>Perkembangan Si Kecil</br>

<br>Melatih si Kecil untuk potty training sudah bisa dilakukan, namun jangan kaget bila ia masih tidak sengaja mengompol di malam hari untuk beberapa bulan atau tahun ke depan. Tak perlu khawatir, kebanyakan anak berhenti mengompol secara natural, dan bukan masalah besar sampai usia 5-6 tahun. Tak perlu bereaksi berlebihan jika ia masih mengompol, dan tenangkan si Kecil agar ia tidak terlalu merasa malu. Berikan perhatian, mungkin saja si Kecil sedang menghadapi suatu tekanan baru.

Di usia ini, si Kecil sudah mulai mengenal warna dan bisa menunjuk warna tertentu saat Ibu memintanya. Ia juga akan lebih suka mengobrol dan bernyanyi, serta menjelaskan apa yang sedang ia lakukan atau yang ia lihat.

Si Kecil juga akan sangat suka membantu Ibu. Pekerjaan rumah akan terlihat sangat menyenangkan di matanya, terutama semua yang dilakukan Ibu. Mulailah dengan tugas-tugas yang mudah, seperti membereskan mainannya atau membuang sampah pada tempatnya. Dengan ini, si Kecil bisa mudah belajar tanggung jawab dan kepuasan dalam mengerjakan sesuatu dengan baik. Jangan lupa beri ia pujian setiap kali berhasil melakukan sesuatu.

Bola bisa menjadi teman bermain yang pas untuk si Kecil. Bermain lempar tangkap bola dan menendang bola melatih koordinasi mata dan kaki-tangannya, serta sistem motorik halus dan kasarnya (hyperlink to toddler motoric), yang tak hanya menyenangkan untuk si Kecil, namun juga bagus untuk pertumbuhannya.

Si Kecil bisa saja ngambek dan menggerutu, atau bahkan berteriak dan meninggikan suaranya bila keinginannya tidak dituruti atau menolak sesuatu yang Ibu perintahkan. Perlu diingat, kemampuan emosinya masih belum stabil. Tidak acuhkan si Kecil bila perlu, atau bawa si Kecil ke tempat yang lebih sepi bila Ibu sedang berada di tempat umum. Beri pujian pada si Kecil saat dia bisa mengatur emosinya dengan baik.</br>

<br>Peran Ibu</br>

<br>Ini adalah waktu yang tepat untuk Ibu mengajaknya memeriksa perkembangan giginya. Bantu juga si Kecil dalam membangun kebiasaan merawat gigi dengan baik, dan mengatasi masalah gigi sejak dini yang mungkin sudah muncul.

Kemampuan verbal si Kecil yang sudah berkembang pesat berbeda dengan kemampuan emosionalnya yang membutuhkan waktu lebih banyak untuk berkembang. Kesabaran Ibu penting diperlukan. Dunianya masih terfokus pada dirinya sendiri, dan ini adalah hal yang normal.

Bantu si Kecil dalam mengenal angka, seperti mengajarkannya berapa tahun usianya, dan dampingi ia dalam menyebut angka satu, dua, tiga, dan seterusnya. Cara paling mudah untuk membangun kemampuan menghitungnya adalah dengan terus mengajaknya menghitung dalam rutinitasnya, seperti menghitung mobil yang lewat atau bola daging yang ia makan.

Si Kecil akan mulai mencari tahu batasan-batasan terhadap hal-hal yang boleh dan tak boleh dia lakukan. Ia juga akan mulai bernegosiasi dengan Ibu, atau kadang berlari meminta ijin ke orang lain seperti Ayah atau Nenek. Dengan memiliki aturan di keluarga yang jelas, Ibu akan membantunya dalam berdisiplin. Berikan penjelasan yang jelas mengapa Ibu melarang ia melakukan sesuatu.

Cara paling mudah dalam mengajari si Kecil sopan santun adalah dengan memberikan contoh yang baik untuknya. Sering-seringlah mengucapkan "terima kasih" dan "maaf" setiap kali diperlukan. Tunjukkan cara makan yang baik dan sopan saat Ibu makan di luar bersamanya. Pujilah setiap usahanya dan maafkan kesalahan-kesalahan kecilnya.</br>

<br>Yang Perlu Diperhatikan</br>

<br>Konsultasikan dengan dokter anak Ibu jika si Kecil menunjukkan tanda-tanda di bawah ini, untuk memastikan kesehatan tumbuh kembang si Kecil:</br>

<br>Sering terjatuh dan mengalami kesulitan dengan tangga
<li>Sering meneteskan air liur dan sangat tidak jelas dalam berbicara</li>
<li>Tidak bisa membangun menara dari 4 buah balok</li>
<li>Tidak bisa menggambar lingkaran</li>
<li>Tidak bisa berkomunikasi dalam kalimat pendek</li>
<li>Tidak mengerti instruksi yang mudah</li>
<li>Tidak memiliki ketertarikan terhadap anak kecil lainnya</li>
<li>Sangat susah dipisahkan dengan Ibu atau orang terdekat</li>
<li>Menghindari kontak mata</li>
<li>Tidak tertarik dengan mainan</li>
<br><b>Kehilangan kemampuan yang sebelumnya bisa ia lakukan secara drastis.</br>

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