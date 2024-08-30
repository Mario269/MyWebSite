<?php
    if
    (
        isset($_POST['genero']) &&
        isset($_POST['ciudad']) &&
        isset($_POST['eleccion'])
    ){
        $genero = $_POST['genero'];
        $ciudad = $_POST['ciudad'];
        $eleccion = $_POST['eleccion'];

        $file = 'formsdata.php';
        $archivo = fopen($file, 'w+');
        
        fwrite($archivo, "Genero: $genero\nCiudad: $ciudad\nPreferencia: $eleccion\n\n");

        fclose($archivo);

        echo"Datos enviados corretamente";

        $practico3 = "practicos.html";
    } else
    {
        echo"A habido un problema";

        $practico3 = "practicos.html";
    }
?>
<br>
<br>
<a href="<?php echo $practico3; ?>" class="boton"><input type="button" value="Volver"></a>