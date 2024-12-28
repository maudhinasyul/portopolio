<?php
include_once 'header.php';
include_once 'includes/config.php';
$id = isset($_GET['id']) ? $_GET['id'] : die('ERROR: missing ID.');

include_once 'includes/pegawai.inc.php';
$eks = new Pegawai($db);

$eks->id = $id;

$eks->readOne();

if($_POST){

	$eks->nmpg = $_POST['nmpg'];
	$eks->tgl = $_POST['tgl'];
	$eks->jenkel = $_POST['jenkel'];
	$eks->pdk = $_POST['pdk'];
	$eks->prj = $_POST['prj'];
	$eks->dik = $_POST['dik'];
	$eks->jbt = $_POST['jbt'];
	$eks->gol = $_POST['gol'];
	$eks->pnm = $_POST['pnm'];
	$eks->msk = $_POST['msk'];
	$eks->almt = $_POST['almt'];
	$eks->npwp = $_POST['npwp'];
	$eks->nohp = $_POST['nohp'];
	$eks->em = $_POST['em'];
	
	if($eks->update()){
		echo "<script>location.href='pegawai.php'</script>";
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
		  <div class="col-md-13">
		  <div class="well">
		  	<div class="page-header">
			  <h3><b style="color: black">Ubah Data Pegawai</b></h3>
			</div>
			
			    <form method="post">
				  <div class="form-group">
				    <label for="id">NIP</label>
				    <input type="text" class="form-control" id="id" name="id" value="<?php echo $eks->id; ?>">
				  </div><div class="form-group">
				    <label for="nmpg">Nama Pegawai</label>
				    <input type="text" class="form-control" id="nmpg" name="nmpg" value="<?php echo $eks->nmpg; ?>">
				  </div>
				  <div class="form-group">
				    <label for="tgl">Tanggal Lahir</label>
					<input type="date" class="form-control" id="tgl" name="tgl" value="<?php echo $eks->tgl; ?>">
				  </div>
				  <div class="form-group">
				    <label for="jenkel">Jenis Kelamin</label>
				    <input type="text" class="form-control" id="jenkel" name="jenkel" value="<?php echo $eks->jenkel; ?>">
				  </div>
				  <div class="form-group">
				    <label for="pdk">Pendidikan</label>
				    <input type="text" class="form-control" id="pdk" name="pdk" value="<?php echo $eks->pdk; ?>">
				  </div>
				  <div class="form-group">
				    <label for="prj">Prajab</label>
				    <input type="date" class="form-control" id="prj" name="prj" value="<?php echo $eks->prj; ?>">
				  </div>
				  <div class="form-group">
				    <label for="dik">Diklat Pimpinan</label>
				    <input type="date" class="form-control" id="dik" name="dik" value="<?php echo $eks->dik; ?>">
				  </div>
				  <div class="form-group">
				    <label for="jbt">Jabatan</label>
				    <input type="text" class="form-control" id="jbt" name="jbt" value="<?php echo $eks->jbt; ?>">
				  </div>
				  <div class="form-group">
				    <label for="gol">Golongan</label>
				    <input type="text" class="form-control" id="gol" name="gol" value="<?php echo $eks->gol; ?>">
				  </div>
				  <div class="form-group">
				    <label for="pnm">Penempatan</label>
				    <input type="text" class="form-control" id="pnm" name="pnm" value="<?php echo $eks->pnm; ?>">
				  </div>
				  <div class="form-group">
				    <label for="msk">Masa Kerja</label>
				    <input type="text" class="form-control" id="msk" name="msk" value="<?php echo $eks->msk; ?>">
				  </div>
				  <div class="form-group">
				    <label for="almt">Alamat</label>
				    <input type="text" class="form-control" id="almt" name="almt" value="<?php echo $eks->almt; ?>">
				  </div>
				  <div class="form-group">
				    <label for="npwp">NPWP</label>
				    <input type="text" class="form-control" id="npwp" name="npwp" value="<?php echo $eks->npwp; ?>">
				  </div>
				  <div class="form-group">
				    <label for="nohp">No. HP</label>
				    <input type="text" class="form-control" id="nohp" name="nohp" value="<?php echo $eks->nohp; ?>">
				  </div>
				  <div class="form-group">
				    <label for="em">Email</label>
				    <input type="text" class="form-control" id="em" name="em" value="<?php echo $eks->em; ?>">
				  </div>
				  <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-save"></span>&nbsp;&nbsp;&nbsp;Ubah</button>
				  <button type="button" onclick="location.href='pegawai.php'" class="btn btn-success"><span class="glyphicon glyphicon-share-alt"></span>&nbsp;&nbsp;&nbsp;Kembali</button>
				</form>
			  
		  </div>
		  </div>
		  <!-- <div class="col-xs-12 col-sm-3 col-md-3">
		  	<?php include_once 'sidebar.php'; ?>
		</div> -->
		<?php
include_once 'footer.php';
?>