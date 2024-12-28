<?php
include_once 'header.php';
include_once 'includes/spt.inc.php';
$pgn = new SPT($db);

$id = isset($_GET['id']) ? $_GET['id'] : die('ERROR: missing ID.');

include_once 'includes/golongan.inc.php';
$eks = new Golongan($db);

$eks->id = $id;

$eks->readOne();

if($_POST){

	$eks->nm = $_POST['nm'];
	$eks->uh = $_POST['uh'];
	$eks->ur = $_POST['ur'];
	
	if($eks->update()){
		echo "<script>location.href='golongan.php'</script>";
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
			  <h3>Ubah Golongan</h3>
			</div>
			
			    <form method="post">
				  <div class="form-group">
				    <label for="id">Status</label>
				    <select class="form-control" id="id" name="id">
				    	<option value='1'>1</option>
						<option value='2'>2</option>
				    </select>
				  </div>
				  <div class="form-group">
				    <label for="nm">Keterangan</label>
				    <select class="form-control" id="nm" name="nm">
				    	<option value='pimpinan'>Pimpinan</option>
						<option value='staf'>Staf</option>
				    </select>
				  </div>
				  <div class="form-group">
				    <label for="uh">Uang Harian</label>
				    <select class="form-control" id="uh" name="uh">
				    	<option value='Rp530.000'>Rp530.000</option>
						<option value='Rp370.000'>Rp370.000</option>
				    </select>
				  </div>
				  <div class="form-group">
				    <label for="ur">Uang Representasi</label>
				    <select class="form-control" id="ur" name="ur">
				    	<option value='Rp150.000'>Rp150.000</option>
						<option value='-'>-</option>
				    </select>
				  </div>
				  <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-save"></span>&nbsp;&nbsp;&nbsp;Ubah</button>
				  <button type="button" onclick="location.href='golongan.php'" class="btn btn-success"><span class="glyphicon glyphicon-share-alt"></span>&nbsp;&nbsp;&nbsp;Kembali</button>
				</form>
			  
		  </div>
		  </div>
		  <div class="col-xs-12 col-sm-3 col-md-6">
		  	<?php include_once 'sidebar1.php'; ?>
		</div>
		<?php
include_once 'footer.php';
?>