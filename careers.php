<?php
/**
 * 
 */
class Careers
{
	private $id;
	private $codigo;
	private $nombre;
	
	function Careers()
	{
		$this->id=		$pId;
		$this->codigo=	$pCodigo;
		$this->nombre=	$pNombre;
	}

	function Select()
	{
		$qSelect = $mysqli->query("SELECT * FROM carreras");
		while($carrera = $qSelect->fetch_object()){
            echo '<option value='.$carrera->id.$carrera->nombre.'</option>';
          }
	}
}
?>