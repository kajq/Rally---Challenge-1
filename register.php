<?php
/**
 * 
 */
session_start();
require("connect_db.php");
$register = new register();
$register->insert_user();

class register 
{
	private $cedula;
	private $nombre;
	private $apellidos;
	private $carrera;
	private $hora_matricula
	private $connect_db;

	function register()
	{
		$this->cedula=		$_POST['cedula'];
		$this->nombre=		$_POST['nombre'];
		$this->apellidos=		$_POST['apellidos'];
		$this->carrera=		$_POST['id_carrera'];
		$this->hora_matricula = date_default_timezone_get();
		$this->connect_db = $_SESSION['connect'];
	}

	function insert_user(){
		$qInsert = "INSERT INTO estudiante VALUES('$this->cedula','$this->nombre', '$this->apellidos')";
		$execute = mysqli_query($this->connect_db,$qInsert);
		//validación de error en bd
		if (!$execute) {
			echo '<script>alert("Error al insertar datos personales: ';
			echo $this->connect_db->error;
			echo '");</script> ';
		} else {
			//los ceros son tipo usuario estandar y estado de usuario
			$qInsert = "INSERT INTO matricula VALUES('$this->cedula', '$this->carrera', '$this->hora_matricula')";
			$execute = mysqli_query($this->connect_db,$qInsert);
			if (!$execute) {
				echo '<script>alert("Errormessage1: "';
				echo $this->connect_db->error . "')</script>";
			} else {
				echo '<script>alert("Usuario registrado con éxito")</script>';
				}
			}
	}
}
?>