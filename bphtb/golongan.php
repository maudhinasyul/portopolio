<?php
include_once 'header.php';
include_once 'includes/Golongan.inc.php';
$pro = new Golongan($db);
$stmt = $pro->readAll();
?>
<div class="well">
	<div class="row">
		<div class="col-md-6 text-left">
			<h4><b>Data Golongan<b></h4>
		</div>
		<div class="col-md-6 text-right">
			<button onclick="location.href='golongan-baru.php'" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;&nbsp;Tambah Data</button>
		</div>
	</div>
	<br/>

	<table width="100%" class="table table-striped table-bordered" id="tabeldata">
        <thead>
            <tr>
                <th width="30px">No</th>
                <th>Status</th>
                <th>Keterangan</th>
				<th>Uang Harian</th>
                <th>Uang Representasi</th>
                <th width="100px">Aksi</th>
            </tr>
        </thead>

       <!--  <tfoot>
            <tr>
                <th>No</th>
                <th>Nama Kriteria</th>
                <th>Tipe Kriteria</th>
                <th>Bobot Kriteria</th>
                <th>Aksi</th>
            </tr>
        </tfoot> -->

        <tbody>
<?php
$no=1;
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
?>
            <tr>
                <td><?php echo $no++ ?></td>
				<td><?php echo $row['gol'] ?></td>
                <td><?php echo $row['nama'] ?></td>
				<td><?php echo $row['uangharian'] ?></td>
                <td><?php echo $row['uangrepresentasi'] ?></td>
                <td class="text-center">
					<a href="golongan-ubah.php?id=<?php echo $row['gol'] ?>" class="btn btn-warning"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
					<a href="golongan-hapus.php?id=<?php echo $row['gol'] ?>" onclick="return confirm('Yakin ingin menghapus data')" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
			    </td>
            </tr>
<?php
}
?>
        </tbody>

    </table>
</div>	
<?php
include_once 'footer.php';
?>