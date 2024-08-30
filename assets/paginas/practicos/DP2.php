<?php
    isset($_GET['name']);
    isset($_GET['apell']);
    isset($_GET['sexo']);
    isset($_GET['correo']);
    isset($_GET['opciones']);

    $name = $_GET['name'];
    $apell = $_GET['apell'];
    $sexo = $_GET['sexo'];
    $correo = $_GET['correo'];
    $opciones = $_GET['opciones'];

    $file = 'formsdata.php';
    $archivo = fopen($file, 'w+');

    fwrite($archivo, "Nombre: $name\nApellido: $apell\nSexo: $sexo\nEmail: $correo\nOpcion: $opciones\n\n");

    fclose($archivo);

    echo"Datos enviados correctamente";

    $practico2 = "practicos.html";
?>
<br>
<br>
<a href="<?php echo $practico2; ?>" class="boton"><input type="button" value="Volver"></a>