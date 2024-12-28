<?php
include_once 'header.php';
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
				  	<li><?php echo $row3['no_spt'] ?> (<?php echo $row3['nama'] ?>)</li>
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
				  	<li>(<?php echo $row2['peg1'] ?>) <?php echo $row2['nama'] ?></li>
				  	<?php
					}
				  	?>
				</ol>
			</div>
		  </div>
		
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
	            text: 'Data SPD '
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