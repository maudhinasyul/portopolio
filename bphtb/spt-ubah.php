<?php
include_once 'header.php';
include_once 'includes/config.php';
$id = isset($_GET['id']) ? $_GET['id'] : die('ERROR: missing ID.');

include_once 'includes/spt.inc.php';
$eks = new SPT($db);

$eks->id = $id;

$eks->readOne();

if($_POST){

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
	
	if($eks->update()){
		echo "<script>location.href='spt.php'</script>";
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
			  <h3><b style="color: black">Ubah SPT</b></h3>
			</div>
			
			    <form method="post">
				  <div class="form-group">
				    <label for="id">Nomor SPT</label>
				    <input type="text" class="form-control" id="id" name="id" value="<?php echo $eks->id; ?>">
				  </div>
				  <div class="form-group">
				    <label for="str">Dari Tanggal</label>
				    <input type="date" class="form-control" id="tgl" name="tgl" value="<?php echo date('Y-m-d'); ?>" />
				  </div>
				  <div class="form-group">
				    <label for="en">Sampai Tanggal</label>
				    <input type="text" class="form-control" id="en" name="en" value="<?php echo $eks->en; ?>">
				  </div>
				  <div class="form-group">
				    <label for="nm">Nama Kegiatan</label>
				    <input type="text" class="form-control" id="nm" name="nm" value="<?php echo $eks->nm; ?>">
				  </div>
				  <div class="form-group">
				 
				    <label for="pg1">Pegawai 1</label>
				    <select class="form-control" id="pg1" name="pg1" value="">
					<option value="" selected><?php echo $eks->pg1; ?></option>
<?php
include_once 'includes/pegawai.inc.php';
				 $a = mysqli_connect("localhost","root","","spd");
				  
$query = "SELECT nama, jabatan FROM pegawai";
$result = mysqli_query($a,$query);
$num_rows = mysqli_num_rows($result);
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
				    <label for="pg2">Pegawai 2</label>
				    <select class="form-control" id="pg2" name="pg2" value="">
					<option value="" selected><?php echo $eks->pg2; ?></option>
<?php
include_once 'includes/pegawai.inc.php';
				 $a = mysqli_connect("localhost","root","","spd");
				  
$query = "SELECT nama FROM pegawai";
$result = mysqli_query($a,$query);
$num_rows = mysqli_num_rows($result);
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
				    <label for="pg3">Pegawai 3</label>
				    <select class="form-control" id="pg3" name="pg3" value="">
					<option value="" selected><?php echo $eks->pg3; ?></option>
<?php
include_once 'includes/pegawai.inc.php';
				 $a = mysqli_connect("localhost","root","","spd");
				  
$query = "SELECT nama FROM pegawai";
$result = mysqli_query($a,$query);
$num_rows = mysqli_num_rows($result);
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
				    <label for="pg4">Pegawai 4</label>
				    <select class="form-control" id="pg4" name="pg4" value="">
					<option value="" selected><?php echo $eks->pg4; ?></option>
<?php
include_once 'includes/pegawai.inc.php';
				 $a = mysqli_connect("localhost","root","","spd");
				  
$query = "SELECT nama FROM pegawai";
$result = mysqli_query($a,$query);
$num_rows = mysqli_num_rows($result);
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
				    <label for="pg5">Pegawai 5</label>
				    <select class="form-control" id="pg5" name="pg5" value="">
					<option value="" selected><?php echo $eks->pg5; ?></option>
<?php
include_once 'includes/pegawai.inc.php';
				 $a = mysqli_connect("localhost","root","","spd");
				  
$query = "SELECT nama FROM pegawai";
$result = mysqli_query($a,$query);
$num_rows = mysqli_num_rows($result);
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
				    <label for="pg6">Pegawai 6</label>
				    <select class="form-control" id="pg6" name="pg6" value="">
					<option value="" selected><?php echo $eks->pg6; ?></option>
<?php
include_once 'includes/pegawai.inc.php';
				 $a = mysqli_connect("localhost","root","","spd");
				  
$query = "SELECT nama FROM pegawai";
$result = mysqli_query($a,$query);
$num_rows = mysqli_num_rows($result);
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
				    <label for="pg7">Pegawai 7</label>
				    <select class="form-control" id="pg7" name="pg7" value="">
					<option value="" selected><?php echo $eks->pg7; ?></option>
<?php
include_once 'includes/pegawai.inc.php';
				 $a = mysqli_connect("localhost","root","","spd");
				  
$query = "SELECT nama FROM pegawai";
$result = mysqli_query($a,$query);
$num_rows = mysqli_num_rows($result);
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
				  <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-save"></span>&nbsp;&nbsp;&nbsp;Ubah</button>
				  <button type="button" onclick="location.href='spt.php'" class="btn btn-success"><span class="glyphicon glyphicon-share-alt"></span>&nbsp;&nbsp;&nbsp;Kembali</button>
				</form>
			  
		  </div>
		  </div>
		  <!-- <div class="col-xs-12 col-sm-3 col-md-3">
		  	<?php include_once 'sidebar.php'; ?>
		</div> -->
		<?php
include_once 'footer.php';
?>