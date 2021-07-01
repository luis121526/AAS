<?php
if ($_POST['enviar']){
    $var1=copy($_FILES['d1']['tmp_name'], "d1.jpg");     
    $var2=copy($_FILES['d2']['tmp_name'], "d2.jpg");
    $var3=copy($_FILES['d3']['tmp_name'], "d3.jpg");
    $var4=copy($_FILES['d4']['tmp_name'], "d4.jpg");
    $var5=copy($_FILES['d5']['tmp_name'], "d5.jpg");
    $var6=copy($_FILES['d6']['tmp_name'], "d6.jpg");
    $var7=copy($_FILES['d7']['tmp_name'], "d7.jpg");
    $var8=copy($_FILES['d8']['tmp_name'], "d8.jpg");
    $var9=copy($_FILES['d9']['tmp_name'], "d9.jpg");
    $var10=copy($_FILES['d10']['tmp_name'], "d10.jpg");
    $var11=copy($_FILES['d11']['tmp_name'], "d11.jpg");
    $var12=copy($_FILES['d12']['tmp_name'], "d12.jpg");
    $var13=copy($_FILES['d13']['tmp_name'], "d13.jpg");
    $var14=copy($_FILES['d14']['tmp_name'], "d14.jpg");
    $var15=copy($_FILES['d15']['tmp_name'], "d15.jpg");
    $var16=copy($_FILES['d16']['tmp_name'], "d16.jpg");
    $var17=copy($_FILES['d17']['tmp_name'], "d17.jpg");
    $var18=copy($_FILES['d18']['tmp_name'], "d18.jpg");
    $var19=copy($_FILES['d19']['tmp_name'], "d19.jpg");
    $var20=copy($_FILES['d20']['tmp_name'], "d20.jpg");
    $var21=copy($_FILES['d21']['tmp_name'], "d21.jpg");
    $var22=copy($_FILES['d22']['tmp_name'], "d22.jpg");
    $var23=copy($_FILES['d23']['tmp_name'], "d23.jpg");
    $var24=copy($_FILES['d24']['tmp_name'], "d24.jpg");
    $var25=copy($_FILES['d25']['tmp_name'], "d25.jpg");
    $var26=copy($_FILES['d26']['tmp_name'], "d26.jpg");
    $var27=copy($_FILES['d27']['tmp_name'], "d27.jpg");
    $var28=copy($_FILES['d28']['tmp_name'], "d28.jpg");
    $var29=copy($_FILES['d29']['tmp_name'], "d29.jpg");
    $var30=copy($_FILES['d30']['tmp_name'], "d30.jpg");
    $var31=copy($_FILES['d31']['tmp_name'], "d31.jpg");


    
        echo "<script>
        alert('Archivos cargados correctamente');
        location.href='../Contenido/carga_fd.php';
        </script>";
    }
    else{
        echo "<script>
        alert('Ocurrió algún error al cargar el archivo , intente nuevamente');
        location.href='../Contenido/carga_fd.php';
        </script>";
    }





?>