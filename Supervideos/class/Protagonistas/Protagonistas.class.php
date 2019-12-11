<?php  
/**
* Clase para los Protagonistas
*/
class Protagonistas
{
	private $conect;
	public $cod_prot;
	public $nom_prot;
	public $nal_prot;
	public $gen_prot;
	
	function __construct(Conexion $conect)
	{
		$this->conect = $conect;
	}

	public function getProt()
	{
		$sql = "SELECT * FROM protagonistas, genero WHERE protagonistas.gen_prot = genero.cod_gen ";
		$this->result = $this->conect->query($sql);
		return $this->result;
	}

	public function newProt()
	{
		$sql = "INSERT INTO protagonistas VALUES('', '".$_POST['nom_prot']."', '".$_POST['nal_prot']."', '".$_POST['gen_prot']."')";
		$this->conect->query($sql);
	}

	public function singleProt($cod_prot)
	{
		$sql = "SELECT * FROM protagonistas, genero WHERE cod_prot = '".$cod_prot."' AND protagonistas.gen_prot = genero.cod_gen ";
		$this->result = $this->conect->query($sql);
		return $this->result;
	}

	public function updateProt()
	{
		$sql = "UPDATE protagonistas SET nom_prot = '".$_POST['nom_prot']."', nal_prot = '".$_POST['nal_prot']."', gen_prot = '".$_POST['gen_prot']."' WHERE cod_prot = '".$_POST['cod_prot']."' ";
		$this->conect->query($sql);
	}

	public function deleteProt()
	{
		$sql = "DELETE FROM protagonistas WHERE cod_prot = '".$_GET['cod_prot']."' ";
		$this->conect->query($sql);
	}
}
?>