<?php
include "includes/config.php";
session_start();
if(!isset($_SESSION['nama_lengkap'])){
	echo "<script>location.href='index.php'</script>";
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
    <link rel="shortcut icon" href="images/bpkd.png"/>
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Surat Perjalanan Dinas</title>

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
  <body  style="background: #ffffff url(images/back3.jpg) left bottom fixed;">
  
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
		  <img src="images/logo.jpg" width="60px" align="left" >
		 <!--  <a class="navbar-brand" href="index.php"><b style="color: black">&nbsp;&nbsp;&nbsp;&nbsp;Madrasah Aliyah Annajah</b></a> -->
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		  <ul class="nav navbar-nav">
			<li><a href="index.php"><b style="color: black"><i class="glyphicon glyphicon-home"></i>&nbsp;&nbsp;Home</b></a></li>
			<li><a href="spt.php"><b style="color: black"><i class="glyphicon glyphicon-list"></i>&nbsp;&nbsp;SPT</b></a></li>
			<li><a href="golongan.php"><b style="color: black"><i class="glyphicon glyphicon-list"></i>&nbsp;&nbsp;Kriteria Golongan</b></a></li>
			<li><a href="pegawai.php"><b style="color: black"><i class="glyphicon glyphicon-list"></i>&nbsp;&nbsp;Data Pegawai</b></a></li>
			<li><a href="spd.php"><b style="color: black"><i class="glyphicon glyphicon-book"></i>&nbsp;&nbsp;SPD</b></a></li>
			<li><a href="laporan.php"><b style="color: black"><i class="glyphicon glyphicon-bookmark"></i>&nbsp;&nbsp;Laporan</b></a></li>
		  	<li><a href="logout.php"><b style="color: black"><i class="glyphicon glyphicon-off"></i>&nbsp;&nbsp;Logout</b></a></li>
		  </ul>
		  
		</div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>
  
    <div id="container" class="container">
<?php
include_once 'includes/pegawai.inc.php';
$pro = new Pegawai($db);
$stmt = $pro->readAll();
$stmtx = $pro->readAll();
$stmty = $pro->readAll();
include_once 'includes/spt.inc.php';
$pro1 = new SPT($db);
$stmt1 = $pro1->readAll();
$stmtx1 = $pro1->readAll();
$stmty1 = $pro1->readAll();
$stmtz1 = $pro1->readKhusus();
?>
	<br/>
	<div class="well">
	
	  <!-- Nav tabs -->
	  <ul class="nav nav-tabs" role="tablist">
	    <li role="presentation" class="active"><a href="#rangking" aria-controls="rangking" role="tab" data-toggle="tab">Lihat Report</a></li>
	    <li role="presentation"><a href="laporan-cetak.php" role="tab">Cetak Laporan (FPDF)</a></li>
	  </ul>
	
	  <!-- Tab panes -->
	  <div class="tab-content">
	    <div role="tabpanel" class="tab-pane active" id="spt">
	    	<br/>
	    	<h5><style="color: black">1. KEPALA BADAN PENGELOLA KEUANGAN DAERAH KAB. ACEH BARAT, dengan ini menugaskan:</h5>
			<table width="100%" class="table table-striped table-bordered">
		        <thead>
		            <tr>
		                <th class="text-center">No.</th>
						<th class="text-center">Nama / NIP</th>
						<th class="text-center">Pangkat / Gol. Ruang</th>
						<th class="text-center">Jabatan</th>
						<th class="text-center">Keterangan</th>
		            </tr>
				</thead>
		        <tbody>    
		            <?php
					$no=1;
					while ($row = $stmt1->fetch(PDO::FETCH_ASSOC)){
					?>
					<tr>
		                <td><?php echo $no++ ?></td>
						<td><?php echo $row['peg1'] ?>
							<?php echo $row['peg2'] ?>
							<?php echo $row['peg3'] ?>
							<?php echo $row['peg4'] ?>
							<?php echo $row['peg5'] ?>
							<?php echo $row['peg6'] ?>
							<?php echo $row['peg7'] ?>
						</td>
					</tr>
		    <?php
					}
					?>   
				</tbody>					
		    </table>
	    
			<?php
					while ($row = $stmtx1->fetch(PDO::FETCH_ASSOC)){
					?>
		    <h6><style="color: black">Tujuan : <?php echo $row['nama'] ?></h6>
			<?php
			}
			?>
			<h6><style="color: black">2. Segala biaya akibat dikeluarkannya Surat Perintah Tugas ini dibebankan kepada Anggaran BPKD Kabupaten Aceh Barat TA. 2021.</h6>
			<h6><style="color: black">3. Sepulangnya dari perjalanan dinas diharapkan dapat membuat laporan perjalanan dinas.</h6>
			<h6><style="color: black">4. Demikian untuk dimaklumi dan dapat dilaksanakan dengan penuh rasa tanggungjawab.</h6>
	    </div>
	  </div>
	
	</div>
	<footer class="text-center">2021@MaudhinaSylviaUlfha</footer>
	</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-1.11.3.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-printme.js"></script>
    <script>
    	$('#cetak').click(function() {

    		$("#spt").printMe({ "path": "css/bootstrap.min.css", "title": "SPT" }); 

		});
    </script>
    <script type="text/javascript" src="js/tableExport.js"></script>
	<script type="text/javascript" src="js/jquery.base64.js"></script>
	<script type="text/javascript" src="js/html2canvas.js"></script>
	<script type="text/javascript" src="js/jspdf/libs/sprintf.js"></script>
	<script type="text/javascript" src="js/jspdf/jspdf.js"></script>
	<script type="text/javascript" src="js/jspdf/libs/base64.js"></script>
  </body>
</html>