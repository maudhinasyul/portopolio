<?php
include_once 'header.php';
include_once 'includes/pegawai.inc.php';
$pro = new Pegawai($db);
$stmt = $pro->readAll();
?>
<html>
<div class="well well-position-relative">
	<div class="row">
		<div class="col-md-6 text-left">
			<h4><b>Data Pegawai</b></h4>
		</div>
		<div class="col-md-6 text-right">
			<button onclick="location.href='pegawai-baru.php'" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;&nbsp;Tambah Data</button>
		</div>
	<br/>
	</div>
	<table style="width:100%" class="table table-striped table-bordered" id="tabeldata">   
		<thead>
            <tr>
                <th width="100px">No</th>
				<th>NIP</th>
                <th>Nama</th>
				<th>Tanggal Lahir</th>
				<th>Jenis Kelamin</th>
				<th>Pendidikan</th>
				<th>Prajab</th>
				<th>Diklat Pimpinan</th>
				<th>Jabatan</th>
				<th>Golongan</th>
                <th>Penempatan</th>
				<th>Masa Kerja</th>
				<th>Alamat</th>
				<th>NPWP</th>
                <th>No. HP</th>
				<th>Email</th>
                <th width="100px">Aksi</th>
            </tr>
        </thead>
		
		
        <tbody>
<?php
$no=1;
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $row['nip'] ?></td>
				<td><?php echo $row['nama'] ?></td>
				<td><?php echo $row['tgl_lahir'] ?></td>
				<td><?php echo $row['jeniskelamin'] ?></td>
				<td><?php echo $row['pendidikan'] ?></td>
				<td><?php echo $row['prajab'] ?></td>
				<td><?php echo $row['diklat_pim'] ?></td>
                <td><?php echo $row['jabatan'] ?></td>
                <td><?php echo $row['golongan'] ?></td>
                <td><?php echo $row['penempatan'] ?></td>
				<td><?php echo $row['masa_kerja'] ?></td>
                <td><?php echo $row['alamat'] ?></td>
				<td><?php echo $row['npwp'] ?></td>
                <td><?php echo $row['no_hp'] ?></td>
				<td><?php echo $row['email'] ?></td>
                <td class="text-center">
					<a href="pegawai-ubah.php?id=<?php echo $row['nip'] ?>" class="btn btn-warning"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
					<a href="pegawai-hapus.php?id=<?php echo $row['nip'] ?>" onclick="return confirm('Yakin ingin menghapus data')" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
			    </td>
            </tr>	
<?php
}
?>
        </tbody>
		</div>
    </table>	
</div>
<?php
include_once 'footer.php';
?>