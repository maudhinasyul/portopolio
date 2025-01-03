<?php
include_once 'header.php';
include_once 'includes/alternatif.inc.php';
include_once 'includes/kriteria.inc.php';
include_once 'includes/nilai.inc.php';
$pgn1 = new Alternatif($db);
$pgn2 = new Kriteria($db);
$pgn3 = new Nilai($db);

$ia = isset($_GET['ia']) ? $_GET['ia'] : die('ERROR: missing ID.');
$ik = isset($_GET['ik']) ? $_GET['ik'] : die('ERROR: missing ID.');

include_once 'includes/rangking.inc.php';
$eks = new Rangking($db);

$eks->ia = $ia;
$eks->ik = $ik;

$eks->readOne();

if($_POST){

	$eks->nn = $_POST['nn'];
	
	if($eks->update()){
		echo "<script>location.href='rangking.php'</script>";
	} else{
?>
<div class="alert alert-danger alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Gagal Ubah Data!</strong> Terjadi kesalahan, coba sekali lagi.
</div>
<?php
	}
}
?>
		<div class="row">
		  <div class="col-xs-12 col-sm-6 col-md-6">
		  <div class="well">
		  	<div class="page-header">
			  <h3>Ubah Rangking</h3>
			</div>
			
			    <form method="post">
				  <div class="form-group">
				    <label for="nn">Nilai</label>
				    <select class="form-control" id="nn" name="nn">
				    	<option><?php echo $eks->nn; ?></option>
				    	<?php
						$stmt4 = $pgn3->readAll();
						while ($row4 = $stmt4->fetch(PDO::FETCH_ASSOC)){
							extract($row4);
							echo "<option value='{$jum_nilai}'>{$ket_nilai}</option>";
						}
					    ?>
				    </select>
				  </div>
				  <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-save"></span>&nbsp;&nbsp;&nbsp;Ubah</button>
				  <button type="button" onclick="location.href='rangking.php'" class="btn btn-success"><span class="glyphicon glyphicon-share-alt"></span>&nbsp;&nbsp;&nbsp;Kembali</button>
				</form>
			  
		  </div>
		  </div>
		  <div class="col-xs-12 col-sm-3 col-md-6">
		  	<?php include_once 'sidebar.php'; ?>
		</div>
		<?php
include_once 'footer.php';
?>