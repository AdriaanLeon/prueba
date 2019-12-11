<?php
/**
* Clase para los formatos de pelicula
*/
class Formato
{
	private $conect;
	public $cod_form;
	public $nom_form;
	public $result;
	
	function __construct(Conexion $conect)
	{
		$this->conect = $conect;
	}

	public function getFormato()
	{
		$sql = "SELECT * FROM formato ";
		$this->result = $this->conect->query($sql);
		return $this->result;
	}

	public function newFormato()
	{
		$sql = "INSERT INTO formato VALUES ('', '".$_POST['nom_form']."')";
		$this->conect->query($sql);
	}

	public function singleFormato($cod_form)
	{
		$sql = "SELECT * FROM formato WHERE cod_form = '".$cod_form."' ";
		$this->result = $this->conect->query($sql);
		return $this->result;
	}

	public function updateFormato()
	{
		$sql = "UPDATE formato SET nom_form = '".$_POST["nom_form"]."' WHERE cod_form = '".$_POST["cod_form"]."' ";
		$this->conect->query($sql);
	}

	public function deleteFormato()
	{
		$sql = "DELETE FROM formato WHERE cod_form = '".$_GET['cod_form']."' ";
		$this->conect->query($sql);
	}
}