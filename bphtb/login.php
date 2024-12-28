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
    <link rel="shortcut icon" href="images/bpkd.jpg"/>
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Rekap Surat Perjalanan Dinas Kab. Aceh Barat</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body style="background: #ffffff url(images/bg.jpg) left bottom fixed;">
  
	<nav class="navbar navbar-inverse navbar-static-top">
	  <div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
		<br>
		  <img src="images/bpkd.jpg" width="60px" align="left" >
		  <a class="navbar-brand" href="#"><h4><b>&nbsp;&nbsp;&nbsp;BPKD Aceh Barat</b></h4></a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		</div><!-- /.container-fluid -->
	</nav>
  
    <div class="container">
		<div class="row">
		  <div class="col-xs-12 col-sm-8 col-md-8">&nbsp;</div>
		  <div class="col-xs-12 col-sm-5 col-md-5">
		  	
		  	<div style="margin-top: 25px;" class="panel panel-default"><div class="panel-body">
		  		<div class="text-center"><h4><b>Login Admin<b></h4></div>
		  		<form method="post">
				  <div class="form-group">
				    <label for="InputUsername1"><b>Username</b></label>
				    <input type="text" class="form-control" name="username"  id="InputUsername1" placeholder="Username" required>
				  </div>
				  <div class="form-group">
				    <label for="InputPassword1"><b>Password</b></label>
				    <input type="password" class="form-control" name="password" id="InputPassword1" placeholder="Password" required>
				  </div>
				  <button type="submit" class="btn btn-primary pull-right"><span class="glyphicon glyphicon-log-in"></span>&nbsp;&nbsp;&nbsp;Login</button>
				</form>
			   </div>	
            </div>
         </div>
      </div>
	 
<?php
include_once 'includes/pegawai.inc.php';
$pro = new Pegawai($db);
$stmt = $pro->readAll();
?>
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		  <ul class="nav navbar-nav">
			<li><a href="nutrisi.php"><b style="color: blue"><i class="glyphicon glyphicon-list"></i>&nbsp;&nbsp;Nutrisi Balita</b></a></li>
			<li><a href="1th.php"><b style="color: blue"><i class="glyphicon glyphicon-list"></i>&nbsp;&nbsp;Aktivitas dan Edukasi Balita</b></a></li>
			
		  </ul>

		</div><!-- /.navbar-collapse -->


	



<?php //////////////////////////////////////////////////// bstes /////////////////////////////////////?>


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
	<?php

include_once 'includes/spt.inc.php';
$pro3 = new SPT($db);
$stmt3 = $pro3->readAll();
include_once 'includes/pegawai.inc.php';
$pro1 = new Pegawai($db);
$stmt1 = $pro1->readAll();
$stmt4 = $pro1->readAll();
include_once 'includes/golongan.inc.php';
$pro2 = new Golongan($db);
$stmt2 = $pro2->readAll();
?>
	
 <div class="well"><div id="container2" style="min-width: 310px; height: 400px; margin: 0 auto"></div></div>
		<!-- <div class="row">
		  <div class="col-xs-12 col-sm-12 col-md-4">
		  <div class="well">
		  	<div class="page-header">
			  <h3><b style="color: black">Nilai Preferensi</b></h3>
			</div>
			    <ol>
			    	<?php
					while ($row3 = $stmt3->fetch(PDO::FETCH_ASSOC)){
					?>
				  	<li><?php echo $row3['ket_nilai'] ?> (<?php echo $row3['jum_nilai'] ?>)</li>
				  	<?php
					}
				  	?>
				</ol>
			  </div>
		  </div>
		  <div class="col-xs-12 col-sm-12 col-md-4">
		  <div class="well">
		  	<div class="page-header">
			  <h3><b style="color: black">Kriteria-Kriteria</b></h3>
			</div>
			    <ol class="list-unstyled">
			    	<?php
					while ($row2 = $stmt2->fetch(PDO::FETCH_ASSOC)){
					?>
				  	<li>(<?php echo $row2['id_kriteria'] ?>) <?php echo $row2['nama_kriteria'] ?></li>
				  	<?php
					}
				  	?>
				</ol>
			</div>
		  </div>
		  <div class="col-xs-12 col-sm-12 col-md-4">
		  <div class="well">
		  	<div class="page-header">
			  <h3><b style="color: black">Alternatif Produk</b></h3>
			</div>
			    <ol class="list-unstyled">
			    	<?php
					while ($row1 = $stmt1->fetch(PDO::FETCH_ASSOC)){
					?>
				  	<li>(<?php echo $row1['id_alternatif'] ?>) <?php echo $row1['nmbalita'] ?></li>
				  	<?php
					}
				  	?>
				</ol>
			  </div>
		  </div>
		</div> -->
		<?php
			include 'footer.php';
		?>
		
	</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-1.11.3.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	<script src="js/highcharts.js"></script>
	<script src="js/exporting.js"></script>
	<script>
	var chart1; // globally available
	$(document).ready(function() {
	      chart1 = new Highcharts.Chart({
	         chart: {
	            renderTo: 'container2',
	            type: 'column'
	         },  
	         title: {
	            text: 'Grafik Perangkingan '
	         },
	         xAxis: {
	            categories: ['Alternatif']
	         },
	         yAxis: {
	            title: {
	               text: 'Jumlah Nilai'
	            }
	         },
	              series:            
	            [
	            <?php
	            while ($row4 = $stmt4->fetch(PDO::FETCH_ASSOC)){
	                  ?>
	                 //data yang diambil dari database dimasukan ke variable nama dan data
	                 //
	                  {
	                      name: '<?php echo $row4['nmbalita'] ?>',
	                      data: [<?php echo $row4['hasil_alternatif'] ?>]
	                  },
	                  <?php } ?>
	            ]
	      });
	   });  
	   </script>
  </body>
</html>