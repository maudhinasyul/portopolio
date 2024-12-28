<?php
include_once 'header.php';
include_once 'includes/alternatif.inc.php';
$pgn1 = new Alternatif($db);
include_once 'includes/kriteria.inc.php';
$pgn2 = new Golongan($db);
include_once 'includes/nilai.inc.php';
$pgn3 = new Nilai($db);
if($_POST){
	
	include_once 'includes/rangking.inc.php';
	$eks = new rangking($db);

	$eks->ia = $_POST['ia'];
	$eks->ik = $_POST['ik'];
	$eks->nn = $_POST['nn'];
	
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
			  <h3><b>Tambah SPD</b></h3>
			</div>
			
			    <form method="post">
				  <div class="form-group">
				    <label for="nama">No. SP2D</label>
				    <input type="text" class="form-control" id="nama" name="nama" required>
				  </div>
				  
         <!--  dari sini -->
				 <!-- sampai sini -->
				  <div class="form-group">
				    <label for="ik">NIP</label>
				    <select class="form-control" id="ik" name="ik">
				    	<option value="0">Pilih Pegawai</option>
				    	<?php
						$stmt2 = $pgn2->readAll();
						while ($row2 = $stmt2->fetch(PDO::FETCH_ASSOC)){
							extract($row2);
							echo "<option value='{$id_kriteria}'>{$nama_kriteria}</option>";
						}
					    ?>
				    </select>
				  </div>
				  <div class="form-group">
				    <label for="nn">Bobot Nilai</label>
				    <select class="form-control" id="nn" name="nn">
				    	<option value="0">Pilih Bobot Nilai</option>
				    	<?php
						$stmt4 = $pgn3->readAll();
						while ($row4 = $stmt4->fetch(PDO::FETCH_ASSOC)){
							extract($row4);
							echo "<option value='{$jum_nilai}'>{$ket_nilai}</option>";
						}
					    ?>
				    </select>
				  </div>
				  <div class="form-group">
				    <label for="nn">Bobot Nilai</label>
				    <select class="form-control" id="nn" name="nn">
				    	<option value="0">Pilih Bobot Nilai</option>
				    	<?php
						$stmt4 = $pgn3->readAll();
						while ($row4 = $stmt4->fetch(PDO::FETCH_ASSOC)){
							extract($row4);
							echo "<option value='{$jum_nilai}'>{$ket_nilai}</option>";
						}
					    ?>
				    </select>
				  </div>
				  <div class="form-group">
				    <label for="nn">Bobot Nilai</label>
				    <select class="form-control" id="nn" name="nn">
				    	<option value="0">Pilih Bobot Nilai</option>
				    	<?php
						$stmt4 = $pgn3->readAll();
						while ($row4 = $stmt4->fetch(PDO::FETCH_ASSOC)){
							extract($row4);
							echo "<option value='{$jum_nilai}'>{$ket_nilai}</option>";
						}
					    ?>
				    </select>
				  </div>
				  <div class="form-group">
				    <label for="nn">Bobot Nilai</label>
				    <select class="form-control" id="nn" name="nn">
				    	<option value="0">Pilih Bobot Nilai</option>
				    	<?php
						$stmt4 = $pgn3->readAll();
						while ($row4 = $stmt4->fetch(PDO::FETCH_ASSOC)){
							extract($row4);
							echo "<option value='{$jum_nilai}'>{$ket_nilai}</option>";
						}
					    ?>
				    </select>
				  </div>
				  <div class="form-group">
				    <label for="nn">Bobot Nilai</label>
				    <select class="form-control" id="nn" name="nn">
				    	<option value="0">Pilih Bobot Nilai</option>
				    	<?php
						$stmt4 = $pgn3->readAll();
						while ($row4 = $stmt4->fetch(PDO::FETCH_ASSOC)){
							extract($row4);
							echo "<option value='{$jum_nilai}'>{$ket_nilai}</option>";
						}
					    ?>
				    </select>
				  </div>
				  <div class="form-group">
				    <label for="nn">Bobot Nilai</label>
				    <select class="form-control" id="nn" name="nn">
				    	<option value="0">Pilih Bobot Nilai</option>
				    	<?php
						$stmt4 = $pgn3->readAll();
						while ($row4 = $stmt4->fetch(PDO::FETCH_ASSOC)){
							extract($row4);
							echo "<option value='{$jum_nilai}'>{$ket_nilai}</option>";
						}
					    ?>
				    </select>
				  </div>
				  <div class="form-group">
				    <label for="nn">Bobot Nilai</label>
				    <select class="form-control" id="nn" name="nn">
				    	<option value="0">Pilih Bobot Nilai</option>
				    	<?php
						$stmt4 = $pgn3->readAll();
						while ($row4 = $stmt4->fetch(PDO::FETCH_ASSOC)){
							extract($row4);
							echo "<option value='{$jum_nilai}'>{$ket_nilai}</option>";
						}
					    ?>
				    </select>
				  </div>
				  <div class="form-group">
				    <label for="nn">Bobot Nilai</label>
				    <select class="form-control" id="nn" name="nn">
				    	<option value="0">Pilih Bobot Nilai</option>
				    	<?php
						$stmt4 = $pgn3->readAll();
						while ($row4 = $stmt4->fetch(PDO::FETCH_ASSOC)){
							extract($row4);
							echo "<option value='{$jum_nilai}'>{$ket_nilai}</option>";
						}
					    ?>
				    </select>
				  </div>
				  <div class="form-group">
				    <label for="nn">Bobot Nilai</label>
				    <select class="form-control" id="nn" name="nn">
				    	<option value="0">Pilih Bobot Nilai</option>
				    	<?php
						$stmt4 = $pgn3->readAll();
						while ($row4 = $stmt4->fetch(PDO::FETCH_ASSOC)){
							extract($row4);
							echo "<option value='{$jum_nilai}'>{$ket_nilai}</option>";
						}
					    ?>
				    </select>
				  </div>
				  <div class="form-group">
				    <label for="nn">Bobot Nilai</label>
				    <select class="form-control" id="nn" name="nn">
				    	<option value="0">Pilih Bobot Nilai</option>
				    	<?php
						$stmt4 = $pgn3->readAll();
						while ($row4 = $stmt4->fetch(PDO::FETCH_ASSOC)){
							extract($row4);
							echo "<option value='{$jum_nilai}'>{$ket_nilai}</option>";
						}
					    ?>
				    </select>
				  </div>
				  <div class="form-group">
				    <label for="nama">Total</label>
				    <input type="text" class="form-control" id="nama" name="nama" required>
				  </div>
				  <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-save"></span>&nbsp;&nbsp;&nbsp;Simpan</button>
				  <button type="button" onclick="location.href='rangking.php'" class="btn btn-success"><span class="glyphicon glyphicon-share-alt"></span>&nbsp;&nbsp;&nbsp;Kembali</button>
				</form>
			  
		  </div>
		  </div>
		  <div class="col-xs-12 col-sm-3 col-md-6">
		  	<?php include_once 'sidebar1.php'; ?>
		</div>
		<?php
include_once 'footer.php';
?>
