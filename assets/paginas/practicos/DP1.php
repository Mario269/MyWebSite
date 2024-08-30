<?php
// Verificar si el formulario ha sido enviado
    if
    (
// Obtener los datos del formulario
        isset($_POST['name']) &&
        isset($_POST['email']) &&
        isset($_POST['mensaje'])
    ){

        $name = $_POST['name'];
        $email = $_POST['email'];
        $mensaje = $_POST['mensaje'];
        
// Abrir el archivo para escribir
        $file = 'formsdata.php';
        $archivo = fopen($file, 'w+');
        
// Escribir los datos en el archivo
        fwrite($archivo, "Nombre: $name\nEmail: $email\nMensaje: $mensaje\n\n");
        
// Cerrar el archivo
        fclose($archivo);
       
// Mostrar mensaje de confirmación
        echo"Datos enviado correctamente";

        $practico1 = "practicos.html";
    } else 
    {

// Mostrar mensaje de error si el formulario no ha sido enviado
        echo"A habido un problema";

        $practico1 = "practicos.html";
    }
?>
<br>
<br>
<a href="<?php echo $practico1; ?>" class="boton"><input type="button" value="Volver"></a>