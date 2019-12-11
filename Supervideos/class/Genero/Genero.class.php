<?php
/**
* Clase para los géneros
*/
class Genero
{
	private $conect;
	public $cod_gen;
	public $nom_gen;
	public $result;
	
	function __construct(Conexion $conect)
	{
		$this->conect = $conect;
	}

	public function getGenero()
	{
		$sql = "SELECT * FROM genero";
		$this->result = $this->conect->query($sql);
		return $this->result;
	}

	public function newGenero()
	{
		
		$sql = "INSERT INTO genero VALUES('', '".$_POST["nom_gen"]."')";
		$this->conect->query($sql);
	}

	public function singleGenero($cod_gen){
		
		$sql = "SELECT * FROM genero WHERE cod_gen = '".$cod_gen."' ";
		$this->result = $this->conect->query($sql);
		return $this->result;
		
	} 
	
	public function updateGenero(){
		
		$sql = "UPDATE genero SET nom_gen = '".$_POST["nom_gen"]."' WHERE cod_gen = '".$_POST["cod_gen"]."' ";
		$this->conect->query($sql);
		
	}
	
	public function deleteGenero(){
		
		$sql = "DELETE FROM genero WHERE cod_gen = '".$_GET["cod_gen"]."' ";
		$this->conect->query($sql);
		
	}
	
}