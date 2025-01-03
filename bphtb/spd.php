<?php
include_once 'header.php';
include_once 'includes/alternatif.inc.php';
$pro1 = new Alternatif($db);
$stmt1 = $pro1->readAll();
include_once 'includes/kriteria.inc.php';
$pro2 = new Golongan($db);
$stmt2 = $pro2->readAll();
include_once 'includes/rangking.inc.php';
$pro = new Rangking($db);
$stmt = $pro->readKhusus();
?>
	<br/>
	<div class="well">
	
	  <!-- Nav tabs -->
	  <ul class="nav nav-tabs" role="tablist">
	    <li role="presentation" class="active"><a href="#rangking" aria-controls="rangking" role="tab" data-toggle="tab">SPD</a></li>
	    <li role="presentation"><a href="#lihat" aria-controls="lihat" role="tab" data-toggle="tab">Lihat Semua SPD</a></li>
	    <li role="presentation"><a href="rangking-baru.php" role="tab">Tambah Data</a></li>
	  </ul>
	
	  <!-- Tab panes -->
	  <div class="tab-content">
	  	<div role="tabpanel" class="tab-pane active" id="rangking">
	    	<br/>
	    	<div class="row">
				<div class="col-md-6 text-left">
			    	<h4><b>Hasil Normalisasi</b></h4>					
				</div>
				<div class="col-md-6 text-right">
					<button onclick="location.href='rangking-baru.php'" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;&nbsp;Tambah Data</button>
				</div>
			</div><br>
			<table width="100%" class="table table-striped table-bordered">
		        <thead>
		            <tr>
		            	<th rowspan="2" style="vertical-align: middle" class="text-center">No. SP2D</th>
		            	<th rowspan="2" style="vertical-align: middle" class="text-center">NIP</th>
		                <th colspan="<?php echo $stmt2->rowCount(); ?>" class="text-center">No. SPT</th>
		                <th rowspan="2" style="vertical-align: middle" class="text-center">Tujuan</th>
		                <th rowspan="2" style="vertical-align: middle" class="text-center">Nama Kegiatan</th>
						<th rowspan="2" style="vertical-align: middle" class="text-center">Lama Tugas</th>
		            	<th rowspan="2" style="vertical-align: middle" class="text-center">Tanggal Berangkat</th>
		                <th colspan="<?php echo $stmt2->rowCount(); ?>" class="text-center">Tanggal Kembali</th>
		                <th rowspan="2" style="vertical-align: middle" class="text-center">Uang Harian</th>
		                <th rowspan="2" style="vertical-align: middle" class="text-center">Uang Representasi</th>
						<th rowspan="2" style="vertical-align: middle" class="text-center">Penginapan</th>
		            	<th rowspan="2" style="vertical-align: middle" class="text-center">Transport</th>
						<th rowspan="2" style="vertical-align: middle" class="text-center">Total</th>
		            	</tr>
		            <tr>
		            <?php
					while ($row2 = $stmt2->fetch(PDO::FETCH_ASSOC)){
					?>
		                <th><?php echo $row2['nama_kriteria'] ?></th>
		            <?php
					}
					?>
		            </tr>
		        </thead>
		
		        <tbody>
		<?php
		while ($row1 = $stmt1->fetch(PDO::FETCH_ASSOC)){
		?>
		            <tr>
		            	 <th><?php echo $row1['umur'] ?></th>
		                <th><?php echo $row1['nmbalita'] ?></th>
		                <?php
		                $a= $row1['id_alternatif'];
						$stmtr = $pro->readR($a);
						while ($rowr = $stmtr->fetch(PDO::FETCH_ASSOC)){
							$b = $rowr['id_kriteria'];
							$tipe = $rowr['tipe_kriteria'];
							$bobot = $rowr['bobot_kriteria'];
						?>
		                <td>
		                	<?php 
		                	if($tipe=='benefit'){
		                		$stmtmax = $pro->readMax($b);
								$maxnr = $stmtmax->fetch(PDO::FETCH_ASSOC);
								echo $nor = $rowr['nilai_rangking']/$maxnr['mnr1'];
							} else{
								$stmtmin = $pro->readMin($b);
								$minnr = $stmtmin->fetch(PDO::FETCH_ASSOC);
								echo $nor = $minnr['mnr2']/$rowr['nilai_rangking'];
							}
							$pro->ia = $a;
							$pro->ik = $b;
							$pro->nn2 = $nor;
							$pro->nn3 = $bobot*$nor;
							$pro->normalisasi();
		                	?>
		                </td>
		                <?php
		                }
						?>
						<td>
							<?php 
							$stmthasil = $pro->readHasil($a);
							$hasil = $stmthasil->fetch(PDO::FETCH_ASSOC);
							echo $hasil['bbn'];
							$pro->ia = $a;
							$pro->has = $hasil['bbn'];
							$pro->hasil();
							?>
						</td>
						<td align="center">
							<?php
							$stmthasil = $pro->readHasil($a);
							$hasil = $stmthasil->fetch(PDO::FETCH_ASSOC);
							// echo $hasil['bbn'];
							$pro->ia = $a;
							$pro->has = $hasil['bbn'];
							// $pro->hasil();

								$status = $pro->has;
								if($status > 50){
									$status = 'YES';
								}else{
									$status = 'NO';
								}

								if($status == "YES"){?>
									<button type="submit" class="btn btn-success"><?php
								echo "$status";?></button>	
								<?php
								}else{?>
									<button type="submit" class="btn btn-danger"><?php
								echo "$status";?></button>	
								<?php
								}?>
								
						</td>
		            </tr>
		<?php
		}
		?>
		        </tbody>
		
		    </table>
		    	
	    </div>
	    <div role="tabpanel" class="tab-pane" id="lihat">
	    	<br/>
	    	<div class="row">
				<div class="col-md-6 text-left">
					<h4><b>Data Rangking</b></h4>
				</div>
				
			</div>
			<br/>
			<table width="100%" class="table table-striped table-bordered" id="tabeldata">
		        <thead>
		            <tr>
		                <th width="30px">No</th>
		                <th>Umur</th>
		                <th>Nama Balita</th>
		                <th>Kriteria</th>
		                <th>Nilai</th>
		                <th width="100px">Aksi</th>
		            </tr>
		        </thead>
		
		        <tfoot>
		            <tr>
		                <th>No</th>
		                <th>Umur</th>
		                <th>Nama Balita</th>
		                <th>Kriteria</th>
		                <th>Nilai</th>
		                <th>Aksi</th>
		            </tr>
		        </tfoot>
		
		        <tbody>
		<?php
		$no=1;
		while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
		?>
		            <tr>
		                <td><?php echo $no++ ?></td>
		                <td><?php echo $row['umur'] ?></td>
		                <td><?php echo $row['nmbalita'] ?></td>
		                <td><?php echo $row['nama_kriteria'] ?></td>
		                <td><?php echo $row['nilai_rangking'] ?></td>
		                <td class="text-center">
							<a href="rangking-ubah.php?ia=<?php echo $row['id_alternatif'] ?>&ik=<?php echo $row['id_kriteria'] ?>" class="btn btn-warning"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
							<a href="rangking-hapus.php?ia=<?php echo $row['id_alternatif'] ?>&ik=<?php echo $row['id_kriteria'] ?>" onclick="return confirm('Yakin ingin menghapus data')" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
					    </td>
		            </tr>
		<?php
		}
		?>
		        </tbody>
		
		    </table>
		    		
	    </div>
	    
	  </div>
	
	</div>
<?php
include_once 'footer.php';
?>