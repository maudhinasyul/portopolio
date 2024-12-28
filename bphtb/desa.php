<?php
include_once 'header.php'; //include untuk header website
include_once 'includes/spt.inc.php'; //include untuk query yang berhubungan dengan nili
$pro = new SPT($db);
$stmt = $pro->readAll();
?>
<div class="well">
	<div class="row">
		<div class="col-md-6 text-left">
			<h4><b style="color: black">Data Desa</b></h4>
		</div>
		<div class="col-md-6 text-right">
			<button onclick="location.href='spt-baru.php'" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;&nbsp;Tambah Data</button>
		</div>
	</div>
	<br/>

	<table width="100%" class="table table-striped table-bordered" id="tabeldata">
        <thead>
            <tr>
                <th width="30px">No</th>
				<th>Kode Desa</th>
				<th>Nama Desa</th>
				<th>Kode Kecamatan</th>
                <th>Keterangan Kegiatan</th>
                <th>Pegawai 1</th>
				<th>Pegawai 2</th>
				<th>Pegawai 3</th>
				<th>Pegawai 4</th>
				<th>Pegawai 5</th>
				<th>Pegawai 6</th>
				<th>Pegawai 7</th>
                <th width="100px">Aksi</th>
            </tr>
        </thead>

       <!--  <tfoot>
            <tr>
                <th>No</th>
                <th>Keterangan Nilai gizi</th>
                <th>Jumlah Nilai</th>
                <th>Aksi</th>
            </tr>
        </tfoot> -->

        <tbody>
<?php
$no=1;
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){ //Menampilkan data dari database
?>
            <tr>
                <td><?php echo $no++ ?></td>
				<td><?php echo $row['no_spt'] ?></td>
				<td><?php echo $row['start'] ?></td>
				<td><?php echo $row['end'] ?></td>
                <td><?php echo $row['nama'] ?></td>
                <td><?php echo $row['peg1'] ?></td>
				<td><?php echo $row['peg2'] ?></td>
				<td><?php echo $row['peg3'] ?></td>
				<td><?php echo $row['peg4'] ?></td>
				<td><?php echo $row['peg5'] ?></td>
				<td><?php echo $row['peg6'] ?></td>
				<td><?php echo $row['peg7'] ?></td>
                <td class="text-center">
					<a href="spt-ubah.php?id=<?php echo $row['no_spt'] ?>" class="btn btn-warning"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
					<a href="spt-hapus.php?id=<?php echo $row['no_spt'] ?>" onclick="return confirm('Yakin ingin menghapus data')" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
					<a href="tes.php?id=<?php echo $row['no_spt'] ?>" onclick="return confirm('Cetak SPT?')" class="btn btn-success"><span class="glyphicon glyphicon-print" aria-hidden="true"></span></a>
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