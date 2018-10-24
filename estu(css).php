<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body>
    <div class= "form">
        <form name="estudiante" method="post" action="">
            <p> Datos del Estudiante</p>
            <br>Cedula: <input class= "input" type="text" name="cedula" required><br>
            <br>Nombre: <input class= "input" type="text" name="nombre" required><br>
            <br>Apellidos: <input class= "input" type="text" name="apellidos" required><br>
            <br>Carrera: <select name="favorites"> <option value="American">American flamingo</option> 
                                                   <option value="Greater">Greater flamingo</option> 
                                                   <option value="Lesser">Lesser flamingo</option> 
                                                   <option selected value="Andean">Andean flamingo</option> 
                                                   <option value="Chilean">Chilean flamingo</option> 
                                                   <option value="James's">James's flamingo</option> </select>
            <br>
            <br><input class= "button" type="submit" value="Guardar" />
        </form>
    </div>
</body>

</html>