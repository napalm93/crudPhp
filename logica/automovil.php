<?php
class automovil{
private $patente;
private $marca;
private $modelo;
private $anio;


function __construct(){

}

public function getPatente(){
	return $this->patente;
}
public function getMarca(){
	return $this->marca;
}
public function getModelo(){
	return $this->modelo;
}
public function getAnio(){
	return $this->anio;
}

public function setPatente($patente){
	$this->patente=$patente;
}
public function setMarca($marca){
	$this->marca=$marca;
}
public function setModelo($modelo){
	$this->modelo=$modelo;
}
public function setAnio($anio){
	$this->anio=$anio;
}	
}
?>