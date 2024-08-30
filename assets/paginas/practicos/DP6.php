<?php
if
(
    isset($_POST['fullname']) &&
    isset($_POST['num']) &&
    isset($_POST['pass']) &&
    isset($_POST['tel']) &&
    isset($_POST['time']) &&
    isset($_POST['week']) &&
    isset($_POST['datetimelocal']) &&
    isset($_POST['name']) &&
    isset($_POST['apell']) &&
    isset($_POST['ci']) &&
    isset($_POST['genero']) &&
    isset($_POST['eleccion']) &&
    isset($_POST['placeholder']) &&
    isset($_POST['autofocus']) &&
    isset($_POST['pattern']) &&
    isset($_POST['opc']) &&
    isset($_POST['foto']) &&
    isset($_POST['fechafoto'])
){
    $fullname = $_POST['fullname'];    
    $num = $_POST['num'];
    $pass = $_POST['pass'];
    $tel = $_POST['tel'];
    $time = $_POST['time'];
    $week = $_POST['week'];
    $datetimelocal = $_POST['datetimelocal'];
    $name = $_POST['name'];
    $apell = $_POST['apell'];
    $ci = $_POST['ci'];
    $genero = $_POST['genero'];
    $eleccion = $_POST['eleccion'];
    $placeholder = $_POST['placeholder'];
    $autofocus = $_POST['autofocus'];
    $pattern = $_POST['pattern'];
    $opc = $_POST['opc'];
    $foto = $_POST['foto'];
    $fechafoto = $_POST['fechafoto'];

    $file = 'formsdata.php';
    $archivo = fopen($file, 'w+');
    
    fwrite($archivo, "Nombre Completo: $fullname\nNumero: $num\nContraseña: $pass\nTeléfono: $tel\nHora: $time\nSemana: $week\nFecha: $datetimelocal\nNombre: $name\nApellido: $apell\nC.I.: $ci\nGenero: $genero\nElección: $eleccion\nPlaceholder: $placeholder\nAutofocus: $autofocus\nPattern: $pattern\nOpción: $opc\nIMG: $foto\nFecha Foto: $fechafoto\n\n");

    fclose($archivo);

    echo"Su formulario a sido ingresado con exito";

    $practico6 = "practicos.html";
}else
{
    echo"Error";

    $practico6 = "practicos.html";
}
?>
<br>
<br>
<a href="<?php echo $practico6; ?>" class="boton"><input type="button" value="Volver"></a>