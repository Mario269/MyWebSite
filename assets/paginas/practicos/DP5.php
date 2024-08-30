<?php
    if
    (
        isset($_POST['name'])&&
        isset($_POST['apell'])&&
        isset($_POST['sexo'])&&
        isset($_POST['correo'])&&
        isset($_POST['ciudad'])&&
        isset($_POST['mensaje'])&&
        isset($_POST['opciones'])
    ){

        $name = $_POST['name'];
        $apell = $_POST['apell'];
        $sexo = $_POST['sexo'];
        $correo = $_POST['correo'];
        $ciudad = $_POST['ciudad'];
        $mensaje = $_POST['mensaje'];
        $opciones = $_POST['opciones'];

        $file = 'formsdata.php';
        $archivo = fopen($file, 'w+');
        
        fwrite($archivo, "Nombre: $name\nApellido: $apell\nGenero: $sexo\nCorreo: $correo\nCiudad: $ciudad\nDescripción: $mensaje\nOpcion: $opciones\n\n");

        fclose($archivo);

        echo"Datos de formulario enviados correctamente";

        $practico5 = "practicos.html";
    }else
    {
        echo"Error, su formulario no a podido ser enviado correctamente";

        $practico5 = "practicos.html";
    }
?>
<br>
<br>
<a href="<?php echo $practico5; ?>" class="boton"><input type="button" value="Volver"></a>