<?php
include_once 'header.php';
include_once 'includes/config.php';
if($_POST){
	
	
	include_once 'includes/spt.inc.php';
	$eks = new SPT($db);

	$eks->id = $_POST['id'];
	$eks->str = $_POST['str'];
	$eks->en = $_POST['en'];
	$eks->nm = $_POST['nm'];
	$eks->pg1 = $_POST['pg1'];
	$eks->pg2 = $_POST['pg2'];
	$eks->pg3 = $_POST['pg3'];
	$eks->pg4 = $_POST['pg4'];
	$eks->pg5 = $_POST['pg5'];
	$eks->pg6 = $_POST['pg6'];
	$eks->pg7 = $_POST['pg7'];
	
	
	if($eks->insert()){
?>
<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Data berhasil ditambah...!</strong>
</div>
<?php
	}
	
	else{
?>
<div class="alert alert-danger alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Data gagal ditambah...!</strong> Terjadi kesalahan, coba sekali lagi.
</div>
<?php
	}
}
?>
		<div class="row">
		  <div class="col-md-13">
		  <div class="well">
		  	<div class="page-header">
			  <h3><b style="color: black">Tambah Data SPT</b></h3>
			</div>
			
			    <form method="post">
				 <div class="form-group">
				    <label for="id">Nomor SPT</label>
				    <input type="text" class="form-control" id="id" name="id" required>
				  </div>
				  <div class="form-group">
				    <label for="str">Dari Tanggal</label>
				    <input type="date" class="form-control" id="str" name="str" value="<?php echo date('Y-m-d'); ?>" />
				  </div>
				  <div class="form-group">
				    <label for="en">Sampai Tanggal</label>
				    <input type="date" class="form-control" id="en" name="en" value="<?php echo date('Y-m-d'); ?>" />
				  </div>
				  <div class="form-group">
				    <label for="nm">Nama Kegiatan</label>
				    <input type="text" class="form-control" id="nm" name="nm" required>
				  </div>
				  <div class="form-group">
				  <?php
				  include_once 'includes/pegawai.inc.php';
				 $a = mysqli_connect("localhost","root","","spd");
				  
$query = "SELECT nama FROM pegawai";
$result = mysqli_query($a,$query);
$num_rows = mysqli_num_rows($result);
				  ?>
				  <label for="pg1">Pegawai 1</label>
				  <select class="form-control" name="pg1" id="pg1">
					  <option value="" selected>--select-- </option>
<?php
if ($num_rows > 0) {
while($row = mysqli_fetch_array($result)){                                                               
    echo '<option value="'.$row['nama'].'">'.$row['nama'].'</option>';

     }


} else {
    echo '<option>No data</option>';
}





mysqli_close();

?> 
					</select>

				  </div>
				  <div class="form-group">
				  <?php
				  include_once 'includes/pegawai.inc.php';
				 $a = mysqli_connect("localhost","root","","spd");
				  
$query = "SELECT nama FROM pegawai";
$result = mysqli_query($a,$query);
$num_rows = mysqli_num_rows($result);
				  ?>
				    <label for="pg2">Pegawai 2</label>
				    <select class="form-control" name="pg2" id="pg2">
					  <option value="" selected>--select-- </option>
<?php
if ($num_rows > 0) {
while($row = mysqli_fetch_array($result)){                                                               
    echo '<option value="'.$row['nama'].'">'.$row['nama'].'</option>';

     }


} else {
    echo '<option>No data</option>';
}





mysqli_close();

?> 
					</select>
				  </div>
				  <div class="form-group">
				  <?php
				  include_once 'includes/pegawai.inc.php';
				 $a = mysqli_connect("localhost","root","","spd");
				  
$query = "SELECT nama FROM pegawai";
$result = mysqli_query($a,$query);
$num_rows = mysqli_num_rows($result);
				  ?>
				    <label for="pg3">Pegawai 3</label>
				    <select class="form-control" name="pg3" id="pg3">
					  <option value="" selected>--select-- </option>
<?php
if ($num_rows > 0) {
while($row = mysqli_fetch_array($result)){                                                               
    echo '<option value="'.$row['nama'].'">'.$row['nama'].'</option>';

     }


} else {
    echo '<option>No data</option>';
}





mysqli_close();

?> 
					</select>
				  </div>
				  <div class="form-group">
				  <?php
				  include_once 'includes/pegawai.inc.php';
				 $a = mysqli_connect("localhost","root","","spd");
				  
$query = "SELECT nama FROM pegawai";
$result = mysqli_query($a,$query);
$num_rows = mysqli_num_rows($result);
				  ?>
				    <label for="pg4">Pegawai 4</label>
				    <select class="form-control" name="pg4" id="pg4">
					  <option value="" selected>--select-- </option>
<?php
if ($num_rows > 0) {
while($row = mysqli_fetch_array($result)){                                                               
    echo '<option value="'.$row['nama'].'">'.$row['nama'].'</option>';

     }


} else {
    echo '<option>No data</option>';
}





mysqli_close();

?> 
					</select>
				  </div>
				  <div class="form-group">
				  <?php
				  include_once 'includes/pegawai.inc.php';
				 $a = mysqli_connect("localhost","root","","spd");
				  
$query = "SELECT nama FROM pegawai";
$result = mysqli_query($a,$query);
$num_rows = mysqli_num_rows($result);
				  ?>
				    <label for="pg5">Pegawai 5</label>
				    <select class="form-control" name="pg5" id="pg5">
					  <option value="" selected>--select-- </option>
<?php
if ($num_rows > 0) {
while($row = mysqli_fetch_array($result)){                                                               
    echo '<option value="'.$row['nama'].'">'.$row['nama'].'</option>';

     }


} else {
    echo '<option>No data</option>';
}





mysqli_close();

?> 
					</select>
				  </div>
				  <div class="form-group">
				  <?php
				  include_once 'includes/pegawai.inc.php';
				 $a = mysqli_connect("localhost","root","","spd");
				  
$query = "SELECT nama FROM pegawai";
$result = mysqli_query($a,$query);
$num_rows = mysqli_num_rows($result);
				  ?>
				    <label for="pg6">Pegawai 6</label>
				    <select class="form-control" name="pg6" id="pg6">
					  <option value="" selected>--select-- </option>
<?php
if ($num_rows > 0) {
while($row = mysqli_fetch_array($result)){                                                               
    echo '<option value="'.$row['nama'].'">'.$row['nama'].'</option>';

     }


} else {
    echo '<option>No data</option>';
}





mysqli_close();

?> 
					</select>
				  </div>
				  <div class="form-group">
				  <?php
				  include_once 'includes/pegawai.inc.php';
				 $a = mysqli_connect("localhost","root","","spd");
				  
$query = "SELECT nama FROM pegawai";
$result = mysqli_query($a,$query);
$num_rows = mysqli_num_rows($result);
				  ?>
				    <label for="pg7">Pegawai 7</label>
				    <select class="form-control" name="pg7" id="pg7">
					  <option value="" selected>--select-- </option>
<?php
if ($num_rows > 0) {
while($row = mysqli_fetch_array($result)){                                                               
    echo '<option value="'.$row['nama'].'">'.$row['nama'].'</option>';

     }


} else {
    echo '<option>No data</option>';
}





mysqli_close();

?> 
					</select>
				  </div>
				  <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-save"></span>&nbsp;&nbsp;&nbsp;Simpan</button>
				  <button type="button" onclick="location.href='spt.php'" class="btn btn-success"><span class="glyphicon glyphicon-share-alt"></span>&nbsp;&nbsp;&nbsp;Kembali</button>
				</form>
			  
		  </div>
		  </div>
		  <!-- <div class="col-md-3">
		  	<?php include_once 'sidebar.php'; ?>
		</div> -->
		<?php
include_once 'footer.php';
?>