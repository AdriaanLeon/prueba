<?php
/**
* Clase para las Peliculas
*/
class Peliculas
{
	private $conect;
	public $cod_pel;
	public $nom_pel;
	public $gen_pel;
	public $prot_pel;
	public $form_pel;
	public $result;
	
	function __construct(Conexion $conect)
	{
		$this->conect = $conect;
	}

	public function getPel()
	{
		$sql = "SELECT * FROM peliculas, genero, formato, protagonistas WHERE peliculas.gen_pel = genero.cod_gen AND peliculas.form_pel = formato.cod_form AND peliculas.prot_pel = protagonistas.cod_prot ";
		$this->result = $this->conect->query($sql);
		return $this->result;
	}
	public function newPel()
	{
		$sql = "INSERT INTO peliculas VALUES ('', '".$_POST['nom_pel']."', '".$_POST['prot_pel']."', '".$_POST['gen_pel']."', '".$_POST['form_pel']."' )  ";
		$this->conect->query($sql);
	}

	public function singlePel($cod_pel)
	{
		$sql = "SELECT * FROM peliculas WHERE cod_pel = '".$cod_pel."'  ";
		$this->result = $this->conect->query($sql);
		return $this->result;
	}

	public function updatePel()
	{
		$sql = "UPDATE peliculas SET nom_pel = '".$_POST['nom_pel']."', prot_pel = '".$_POST['prot_pel']."', gen_pel = '".$_POST['gen_pel']."', form_pel = '".$_POST['form_pel']."' WHERE cod_pel = '".$_POST['cod_pel']."' ";
		$this->conect->query($sql);
	}

	public function deletePel()
	{
		$sql = "DELETE FROM  peliculas WHERE cod_pel = '".$_GET['cod_pel']."' ";
		$this->conect->query($sql);
	}
}