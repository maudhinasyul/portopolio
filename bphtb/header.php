<?php
include "includes/config.php";
session_start();
if(!isset($_SESSION['nama_lengkap'])){
	echo "<script>location.href='login.php'</script>";
}
$config = new Config();
$db = $config->getConnection();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="images/bpkd.jpg"/>
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Administrasi</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/dataTables.bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body style="background: #ffffff url(images/bg.jpg) left bottom fixed;">
  
	<nav class="navbar navbar-inverse navbar-static-top">
	  <div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
		  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </button>
		  <img src="images/bpkd.jpg" width="60px" align="left" >
		  <!-- <a class="navbar-brand" href="index.php"><b style="color: black">&nbsp;&nbsp;Madrasah Aliyah Annajah</b></a> -->
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		  <ul class="nav navbar-nav">
			<li><a href="index.php"><b style="color: black"><i class="glyphicon glyphicon-home"></i>&nbsp;&nbsp;Home</b></a></li>
			<li><a href="spt.php"><b style="color: black"><i class="glyphicon glyphicon-list"></i>&nbsp;&nbsp;SPT</b></a></li>
			<li><a href="golongan.php"><b style="color: black"><i class="glyphicon glyphicon-list"></i>&nbsp;&nbsp;Kriteria Golongan</b></a></li>
			<li><a href="pegawai.php"><b style="color: black"><i class="glyphicon glyphicon-list"></i>&nbsp;&nbsp;Data Pegawai</b></a></li>
			<li><a href="transport.php"><b style="color: black"><i class="glyphicon glyphicon-book"></i>&nbsp;&nbsp;Transport</b></a></li>
			<li><a href="penginapan.php"><b style="color: black"><i class="glyphicon glyphicon-book"></i>&nbsp;&nbsp;Penginapan</b></a></li>
			<li><a href="laporan.php"><b style="color: black"><i class="glyphicon glyphicon-bookmark"></i>&nbsp;&nbsp;Laporan</b></a></li>
		  	<li><a href="logout.php"><b style="color: black"><i class="glyphicon glyphicon-off"></i>&nbsp;&nbsp;Logout</b></a></li>
		  </ul>

		</div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>
  
    <div class="container">