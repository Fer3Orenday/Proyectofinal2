<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <!--------------------- ULISES ---------------------------------------------->
     <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
        <style>
            body{
                background-color: pink ;
                font-family: 'Staatliches', cursive; 
            }
        </style>
     <!-- ulises por favor agrega tus cambios -->



    <!-- --------------------------------  -->
    <!-- ------- -->
</head>
<body>
<h2>Formulario:</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        Nombre:
        <input type="text" name="nombre" maxlength="50"><br>
        Contraseña:
        <input type="password" name="password"><br>
        Educacion:
        <select name="educacion">
            <option value="sin-estudios">Sin estudios</option>
            <br>
            <option value="educacion-obligatoria" selected="selected">Educación Obligatoria</option>
            <option value="formacion-profesional">Formación profesional</option>
            <option value="universidad">Universidad</option>
        </select> <br>
        Nacionalidad:
        <input type="radio" name="nacionalidad" value="hispana">Hispana</input>
        <input type="radio" name="nacionalidad" value="otra">Otra</input><br>
        Idiomas:
        <input type="checkbox" name="idiomas[]" value="español" checked="checked">Español</input>
        <input type="checkbox" name="idiomas[]" value="inglés">Inglés</input>
        <input type="checkbox" name="idiomas[]" value="francés">Francés</input>
        <input type="checkbox" name="idiomas[]" value="aleman">Alemán</input><br>
        Email:
        <input type="text" name="email"><br>
        Sitio Web:
        <input type="text" name="sitioweb"><br>
        <input type="submit" name="submit" value="Enviar">


    </form>
   
</body>
</html>
<?php
function filtrado($datos)
{
    $datos = trim($datos); // Elimina espacios antes y después de los datos
    $datos = stripslashes($datos); // Elimina backslashes \
    $datos = htmlspecialchars($datos); // Traduce caracteres especiales en entidades HTML
    return $datos;
}

if (isset($_POST["submit"]) && $_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = filtrado($_POST["nombre"]);
    $password = filtrado($_POST["password"]);
    $educacion = filtrado($_POST["educacion"]);
    $nacionalidad = filtrado($_POST["nacionalidad"]);
    // Utilizamos implode para pasar el array a string
    $idiomas = filtrado(implode(", ", $_POST["idiomas"]));
    $email = filtrado($_POST["email"]);
    $sitioweb = filtrado($_POST["sitioweb"]);
}
?> 