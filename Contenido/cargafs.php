<?php
if ($_POST['enviar']){
    $var1=copy($_FILES['archivo']['tmp_name'], "fs.jpg");
    if(!$var1){
        echo "<script>
        alert('Ocurrió un error al realizar la carga de archivo, intenta nuevamente');
        location.href='../Contenido/carga_fs.php';
        </script>";
    }
    else{
        echo "<script>
        alert('Archivo cargado correctamente');
        location.href='../Contenido/carga_fs.php';
        </script>";
    }
}
else{
    echo "<script>
    alert('Ocurrió un error al subir el archivo');
    location.href='../Contenido/carga_fs.php';
    </script>";
}





?>