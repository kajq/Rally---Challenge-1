<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
</head>

<body>
    <div>
        <form name="estudiante" method="post" action="">

            <br>Cedula: <input type="text" name="cedula" required><br>
            <br>Nombre: <input type="text" name="nombre" required><br>
            <br>Apellidos: <input type="text" name="apellidos" required><br>
            <br>Carrera: <select name="id_carrera"> 
             <?php 
             require("careers.php");
             $oCareers = new Careers();
             $oCareers->Select();
            ?>
            </select>
            <br>
            <br><input type="submit" value="Guardar" />
        </form>
    </div>
</body>

</html>