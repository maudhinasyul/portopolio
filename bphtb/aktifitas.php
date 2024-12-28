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
			<h4><b>Edukasi Perkembangan Balita </b></h4>
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

	Merupakan kombinasi dari berbagai bahan berikut:
<li>Karbohidrat: Seperti nasi, roti, sereal, kentang, atau mi.</li>
Kenalkan beragam karbohidrat secara bergantian. Selain sebagai menu utama, karbohidrat bisa diolah sebagai makanan selingan atau bekal sekolah seperti puding roti atau donat kentang yang lezat.
<li>Buah dan sayur: Seperti pisang, pepaya, jeruk, tomat, dan wortel.</li>
Jenis sayuran beragam mengandung zat gizi berbeda. Berikan setiap hari baik dalam bentuk segar atau diolah menjadi jus.
<li>Susu dan produk olahannya: Seperti susu pertumbuhan, keju dan yoghurt.</li>
Pastikan balita Ibu mendapatkan asupan kalsium yang cukup dari konsumsi susunya
<li>Protein: Seperti ikan, susu, daging, telur, kacang-kacangan.</li>
Tunda pemberiannya bila timbul alergi atau ganti dengan sumber protein lain. Untuk vegetarian, gabungkan konsumsi susu dengan minuman berkadar vitamin C tinggi untuk membantu penyerapan zat besi.
<li>Lemak: Seperti yang terdapat dalam minyak, santan, mentega, roti, dan kue juga mengandung omega 3 dan 6 yang penting untuk perkembangan otak. </li>
Pastikan si Kecil mendapatkan kadar lemak esensial dan gula yang cukup bagi pertumbuhannya. Namun perlu diperhatikan bahwa lemak dan gula tidak digunakan sebagai pengganti jenis makanan lainnya (seperti karbohidrat).

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