<?php
/**
 * 
 */
class Careers
{
	private $id;
	private $codigo;
	private $nombre;
	private $connect_db;
	
	function Careers()
	{
	$this->connect_db = $_SESSION['connect'];
	}

	function Select()
	{
		$qSelect = $this->connect_db->query("SELECT * FROM carreras");
		while($carrera = $qSelect->fetch_object()){
            echo '<option value=' . $carrera->id . '> ' .
             $carrera->nombre . '</option>';
          }
	}
}
?>