<?php
include_once 'header.php';
if($_POST){
	
	include_once 'includes/pegawai.inc.php';
	$eks = new Pegawai($db);

	$eks->id = $_POST['id'];
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
	
	if($eks->insert()){
?>
<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Berhasil Tambah Data....!</strong>
</div>
<?php
	}
	
	else{
?>
<div class="alert alert-danger alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Gagal Tambah Data!</strong> Terjadi kesalahan, coba sekali lagi.
</div>
<?php
	}
}
?>
		<div class="row">
		  <div class="col-xs-12 col-sm-6 col-md-6">
		  <div class="well">
		  	<div class="page-header">
			  <h3><b>Tambah Data Pegawai</b></h3>
			</div>
			
			    <form method="post">
				  <div class="form-group">
				  	
				    <label for="id">NIP</label>
				    <input type="text" class="form-control" id="id" name="id" required>
				    <br>
					<label for="nmpg">Nama</label>
				    <input type="text" class="form-control" id="nmpg" name="nmpg" required>
				    <br>
					<label for="tgl">Tanggal Lahir</label>
					<br>
				    <input type="date" class="form-control" id="tgl" name="tgl" value="<?php echo date('Y-m-d'); ?>" />
				    <br>
					<label for="jenkel">Jenis Kelamin</label>
				    <input type="text" class="form-control" id="jenkel" name="jenkel" required>
					<br>
					<label for="pdk">Pendidikan</label>
				    <input type="text" class="form-control" id="pdk" name="pdk" required>
					<br>
					<label for="prj">Prajab</label>
				    <input type="date" class="form-control" id="prj" name="prj" value="<?php echo date('Y-m-d'); ?>" />
					<br>
					<label for="dik">Diklat Pimpinan</label>
				    <input type="date" class="form-control" id="dik" name="dik" value="<?php echo date('Y-m-d'); ?>" />
					<br>
				    <label for="jbt">Jabatan</label>
				    <input type="text" class="form-control" id="jbt" name="jbt" required>
				    <br>
				    <label for="gol">Golongan</label>
				    <select class="form-control" id="gol" name="gol">
						<option value='Pengatur Muda (II/A)'>Pengatur Muda (II/A)</option>
						<option value='Pengatur Muda Tingkat I (II/B)'>Pengatur Muda Tingkat I (II/B)</option>
						<option value='Pengatur (II/C)'>Pengatur (II/C)</option>
						<option value='Pengatur Tingkat I (II/D)'>Pengatur Tingkat I (II/D)</option>
						<option value='Penata Muda (III/A)'>Penata Muda (III/A)</option>
						<option value='Penata Muda Tingkat I (III/B)'>Penata Muda Tingkat I (III/B)</option>
						<option value='Penata (III/C)'>Penata (III/C)</option>
						<option value='Penata Tingkat I (III/D)'>Penata Tingkat I (III/D)</option>
						<option value='Pembina (IV/A)'>Pembina (IV/A)</option>
						<option value='Pembina Tingkat I (IV/B)'>Pembina Tingkat I (IV/B)</option>
						<option value='Pembina Utama Muda (IV/C)'>Pembina Utama Muda (IV/C)</option>
						<option value='Pembina Utama (IV/D)'>Pembina Utama (IV/D)</option>
						<option value='Pembina Utama Madya(IV/E)'>Pembina Utama Madya(IV/E)</option>
				    </select>
					<br>
					<label for="pnm">Penempatan</label>
				    <input type="text" class="form-control" id="pnm" name="pnm" required>
				    <br>
					<label for="msk">Masa Kerja</label>
				    <input type="text" class="form-control" id="msk" name="msk" required>
					<br>
				    <label for="almt">Alamat</label>
				    <input type="text" class="form-control" id="almt" name="almt" required>
				    <br>
					<label for="npwp">NPWP</label>
				    <input type="text" class="form-control" id="npwp" name="npwp" required>
					<br>
				    <label for="nohp">No. HP</label>
				    <input type="text" class="form-control" id="nohp" name="nohp" required>
					<br>
					<label for="em">Email</label>
				    <input type="text" class="form-control" id="em" name="em" required>
					</div>
				  <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-save"></span>&nbsp;&nbsp;&nbsp;Simpan</button>
				  <button type="button" onclick="location.href='pegawai.php'" class="btn btn-success"><span class="glyphicon glyphicon-share-alt"></span>&nbsp;&nbsp;&nbsp;Kembali</button>
				</form>
			  
		  </div>
		  </div>
		  <div class="col-xs-12 col-sm-3 col-md-6">
		</div>
		<?php
include_once 'footer.php';
?>