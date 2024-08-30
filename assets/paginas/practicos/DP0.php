<?php
    $sexo = $_REQUEST['sexo'];
    $ciudad = $_REQUEST['ciudad'];
    echo"Es un/a $sexo de la ciudad de $ciudad";

    $practico0 = "practicos.html";
?>
<br>
<br>
<a href="<?php echo $practico0; ?>" class="boton"><input type="button" value="Volver"></a>