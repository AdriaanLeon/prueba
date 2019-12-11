<?php  
/**
* Clase para las consultas especiales
*/
class Consultas
{
	private $conect;
	public $cod_pel;
	public $nom_pel;
	public $gen__pel;
	public $prot_pel;
	public $form_pel;
	public $cod_form;
	public $nom_form;
	public $cod_gen;
	public $nom_gen;
	public $cod_prot;
	public $nom_prot;
	public $nal_prot;
	public $gen_prot;
	public $result;
	
	function __construct(Conexion $conect)
	{
		$this->conect = $conect;
	}

	public function genPelConsulta($nom_gen)
	{
		$sql = "SELECT * FROM genero, peliculas, formato, protagonistas WHERE nom_gen LIKE '".$nom_gen."%' AND genero.cod_gen = peliculas.gen_pel AND peliculas.form_pel = formato.cod_form AND peliculas.prot_pel = protagonistas.cod_prot ORDER BY nom_gen ";
		$this->result = $this->conect->query($sql);
		return $this->result;
	}

	public function protPelConsulta($nom_prot)
	{
		$sql = "SELECT * FROM protagonistas, peliculas, genero, formato  WHERE nom_prot LIKE '".$nom_prot."%' AND protagonistas.cod_prot = peliculas.prot_pel AND  peliculas.gen_pel = genero.cod_gen AND peliculas.form_pel = formato.cod_form ORDER BY nom_prot ";
		$this->result = $this->conect->query($sql);
		return $this->result;
	}

	public function generosConsulta()
	{
		$sql = "SELECT * FROM peliculas, genero, protagonistas, formato WHERE peliculas.gen_pel = genero.cod_gen AND protagonistas.cod_prot = peliculas.prot_pel AND peliculas.form_pel = formato.cod_form ";
		$this->result = $this->conect->query($sql);
		return $this->result;
	}

	public function protagonistasConsulta()
	{
		$sql = "SELECT * FROM protagonistas, peliculas, genero, formato  WHERE  protagonistas.cod_prot = peliculas.prot_pel AND  peliculas.gen_pel = genero.cod_gen AND peliculas.form_pel = formato.cod_form  ";
		$this->result = $this->conect->query($sql);
		return $this->result;
	}

	public function numProt()
	{
		$sql = "SELECT cod_prot FROM protagonistas ";
		$this->result = $this->conect->query($sql);
		return mysqli_num_rows($this->result);
	}

	public function numGen()
	{
		$sql = "SELECT cod_gen FROM genero ";
		$this->result = $this->conect->query($sql);
		return mysqli_num_rows($this->result);
	}

	public function numPel()
	{
		$sql = "SELECT cod_pel FROM peliculas ";
		$this->result = $this->conect->query($sql);
		return mysqli_num_rows($this->result);
	}

	public function numForm()
	{
		$sql = "SELECT cod_form FROM formato ";
		$this->result = $this->conect->query($sql);
		return mysqli_num_rows($this->result);
	}
}
?>