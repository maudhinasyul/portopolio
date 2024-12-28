<?php
class Pegawai{
	
	private $conn;
	private $table_name = "pegawai";
	
	public $id;
	public $nmpg;
	public $tgl;
	public $jenkel;
	public $pdk;
	public $prj;
	public $dik;
	public $jbt;
	public $gol;
	public $pnm;
	public $msk;
	public $almt;
	public $npwp;
	public $nohp;
	public $em;
		
	public function __construct($db){
		$this->conn = $db;
	}
	
	function insert(){
		
		$query = "insert into ".$this->table_name." values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
		$stmt = $this->conn->prepare($query);
		$stmt->bindParam(1, $this->id);
		$stmt->bindParam(2, $this->nmpg);
		$stmt->bindParam(3, $this->tgl);
		$stmt->bindParam(4, $this->jenkel);
		$stmt->bindParam(5, $this->pdk);
		$stmt->bindParam(6, $this->prj);
		$stmt->bindParam(7, $this->dik);
		$stmt->bindParam(8, $this->jbt);
		$stmt->bindParam(9, $this->gol);
		$stmt->bindParam(10, $this->pnm);
		$stmt->bindParam(11, $this->msk);
		$stmt->bindParam(12, $this->almt);
		$stmt->bindParam(13, $this->npwp);
		$stmt->bindParam(14, $this->nohp);
		$stmt->bindParam(15, $this->em);
		
		if($stmt->execute()){
			return true;
		}else{
			return false;
		}
		
	}
	
	function readAll(){

		$query = "SELECT * FROM ".$this->table_name." ORDER BY nip ASC";
		$stmt = $this->conn->prepare( $query );
		$stmt->execute();
		
		return $stmt;
	}
	
	function readKhusus(){

		$query = "SELECT * FROM pegawai a, spt b, where a.nip=c.peg1 order by a.nip asc";
		$stmt = $this->conn->prepare( $query );
		$stmt->execute();
		
		return $stmt;
	}
	
	function readR($a){

		$query = "SELECT * FROM pegawai a, spt b, where a.nip=c.peg1 order by a.nip asc";
		$stmt = $this->conn->prepare( $query );
		$stmt->execute();
		
		return $stmt;
	}
	
	// used when filling up the update product form
	function readOne(){
		
		$query = "SELECT * FROM " . $this->table_name . " WHERE nip=? LIMIT 0,1";

		$stmt = $this->conn->prepare( $query );
		$stmt->bindParam(1, $this->id);
		$stmt->execute();

		$row = $stmt->fetch(PDO::FETCH_ASSOC);
		
		$this->id 			 = $row['nip'];
		$this->nmpg 	 = $row['nama'];
		$this->tgl 	 		= $row['tgl_lahir'];
		$this->jenkel 		 = $row['jeniskelamin'];
		$this->pdk			= $row['pendidikan'];
		$this->prj			= $row['prajab'];
		$this->dik			= $row['diklat_pim'];
		$this->jbt		 	 = $row['jabatan'];
		$this->gol 			 = $row['golongan'];
		$this->pnm			 = $row['penempatan'];
		$this->msk			= $row['masa_kerja'];
		$this->almt			 = $row['alamat'];
		$this->npwp			= $row['npwp'];
		$this->nohp 			 = $row['no_hp'];
		$this->em			= $row['email'];
	}
	
	// update the product
	function update(){

		$query = "UPDATE 
					" . $this->table_name . " 
				SET 
					nama = :nmpg,
					tgl_lahir = :tgl,
					jeniskelamin	 = :jenkel,
					pendidikan	 = :pdk,
					prajab	 = :prj,
					diklat_pim	 = :dik,
					jabatan		 = :jbt,
					golongan 		 = :gol,
					penempatan 		 = :pnm,
					masa_kerja	 = :msk,
					alamat 	 = :almt,
					npwp 	 = :npwp,
					no_hp 	 = :nohp,
					email	 = :em
				WHERE
					nip = :id";

		$stmt = $this->conn->prepare($query);
		
		$stmt->bindParam(':id', $this->id);
		$stmt->bindParam(':nmpg', $this->nmpg);
		$stmt->bindParam(':tgl', $this->tgl);
		$stmt->bindParam(':jenkel',$this->jenkel);
		$stmt->bindParam(':pdk',$this->pdk);
		$stmt->bindParam(':prj',$this->prj);
		$stmt->bindParam(':dik',$this->dik);
		$stmt->bindParam(':jbt',$this->jbt);
		$stmt->bindParam(':gol', $this->gol);
		$stmt->bindParam(':pnm',$this->pnm);
		$stmt->bindParam(':msk',$this->msk);
		$stmt->bindParam(':almt', $this->almt);
		$stmt->bindParam(':npwp', $this->npwp);
		$stmt->bindParam(':nohp', $this->nohp);
		$stmt->bindParam(':em',$this->em);
		
		// execute the query
		if($stmt->execute()){
			return true;
		}else{
			return false;
		}
	}
	
	// delete the product
	function delete(){
	
		$query = "DELETE FROM " . $this->table_name . " WHERE nip = ?";
		
		$stmt = $this->conn->prepare($query);
		$stmt->bindParam(1, $this->id);

		if($result = $stmt->execute()){
			return true;
		}else{
			return false;
		}
	}
}
?>