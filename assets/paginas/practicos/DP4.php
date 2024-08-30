<?php
    if
    (
        isset($_GET['name']) &&
        isset($_GET['tel']) &&
        isset($_GET['correo']) &&
        isset($_GET['pais']) &&
        isset($_GET['opciones'])
    ){

        $name = $_GET['name'];
        $tel = $_GET['tel'];
        $correo = $_GET['correo'];
        $pais = $_GET['pais'];
        $opciones = $_GET['opciones'];

        $file = 'formsdata.php';
        $archivo = fopen($file, 'w+');
        
        fwrite($archivo, "Nombre: $name\nTeléfono: $tel\nCorreo: $correo\nPaís: $pais\nInteres: $opciones\n\n");

        fclose($archivo);

        echo"Su formulario han sido enviados correctamente";

        $practico4 = "practicos.html";
    }else
    {
        echo"A habido un error con el envido de su fomrulario.";

        $practico4 = "practicos.html";
    }
?>
<br>
<br>
<a href="<?php echo $practico4; ?>" class="boton"><input type="button" value="Volver"></a>