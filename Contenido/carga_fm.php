<?php
 date_default_timezone_set('America/Mexico_City');
 $date2= date("d-m-Y");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Contenido</title>
    <link rel="preload" href="../css/bootstrap.min.css" as="style">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="preload" as="style">
    <link rel="stylesheet" href="../css/especial.css">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet"> 

</head>
<header class="headr row container-fluid">
        <div class="col-3">
            <h4>Gaceta <span>
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-up-circle" width="36" height="36" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <circle cx="12" cy="12" r="9" />
                <line x1="12" y1="8" x2="8" y2="12" />
                <line x1="12" y1="8" x2="12" y2="16" />
                <line x1="16" y1="12" x2="12" y2="8" />
                </svg>
            </span></h4>
        </div>
        <div class="userdata col-7">
            <h4>Usuario <span>
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-check" width="36" height="36" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <circle cx="9" cy="7" r="4" />
                <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                <path d="M16 11l2 2l4 -4" />
                </svg>
            </span></h4>
        </div>
        <div class=" cs col-2">
            <button class="btn btn-danger">Cerrar Sesion</button>
        </div>
    </header>
<body>
      <section class="row container-fluid prin ">
            <div class="col-2 barralat">
            <hr>
            <button class="btn btn-info" onclick="location.href='../Contenido/dash.php'"> <span>
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-aspect-ratio" width="36" height="36" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
            <rect x="3" y="5" width="18" height="14" rx="2" />
            <path d="M7 12v-3h3" />
            <path d="M17 12v3h-3" />
            </svg>
            </span>Panel Principal </button>
            <hr>
            <button class="btn btn-info" onclick="location.href='../Contenido/carga_fs.php'"> <span>
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-aspect-ratio" width="36" height="36" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
            <rect x="3" y="5" width="18" height="14" rx="2" />
            <path d="M7 12v-3h3" />
            <path d="M17 12v3h-3" />
            </svg>
            </span> Frase Semanal </button>
            <hr>
            <button class="btn btn-info" onclick="location.href='../Contenido/carga_fm.php'">
            <span>
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-screen-share" width="36" height="36" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
            <path d="M21 12v3a1 1 0 0 1 -1 1h-16a1 1 0 0 1 -1 -1v-10a1 1 0 0 1 1 -1h9" />
            <line x1="7" y1="20" x2="17" y2="20" />
            <line x1="9" y1="16" x2="9" y2="20" />
            <line x1="15" y1="16" x2="15" y2="20" />
            <path d="M17 4h4v4" />
            <path d="M16 9l5 -5" />
            </svg>
            </span>
            Frase Mensual
            </button>
            <hr>
            <button class="btn btn-info" onclick="location.href='../Contenido/carga_fd.php'">
            <span>
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-calendar" width="36" height="36" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
            <rect x="4" y="5" width="16" height="16" rx="2" />
            <line x1="16" y1="3" x2="16" y2="7" />
            <line x1="8" y1="3" x2="8" y2="7" />
            <line x1="4" y1="11" x2="20" y2="11" />
            <line x1="11" y1="15" x2="12" y2="15" />
            <line x1="12" y1="15" x2="12" y2="18" />
            </svg>
            </span>
            Frases Diarias
            </button>
            <hr>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <hr>
            </div>
            <div class="col-9 vista">    
            <h3 class="texto">Cargar Frase Mensual</h3>
            
            <hr>
            <div class="row container-fluid">
                <div class="col-4">
                    <h5>Imagen Actual</h5>
                </div>
                <div class="col-8">
                    <img src="../Contenido/fm.jpg" alt="imagen" title="fs" class="imgs">
                </div>
            </div>
            <div class="w-100"></div>
            <hr>
            <div class="row container-fluid">
                <div class="col-4 anotacion">
                <h5>Atención</h5>
                <hr>
                       <p>Cargar unicamente imagen en formato .jpg
                            y con el nombre siguiente: fm 
                            <br>
                            Ejemplo : fm.jpg
                       </p>
                </div>
                <div class="col-8 anotacion2">
                   <h5 class="text-center">Carga Aquí Tu Archivo</h5>
                   <hr>
                   <form action="../Contenido/cargafm.php" method="POST" enctype="multipart/form-data">
                       <input type="file" name="archivo">
                       <input type="submit" class="btn btn-info" name="enviar" value="Cargar">
                   </form>

                </div>
            </div>
                    
            </div>
            <hr>
            </div>
      </section>
      
</body>
<footer class="pie">
    
    <p>SICASA S.A De C.V     <?php echo date("Y") ?>     Todos Los Derechos Reservados</p>
    
</footer>
</html>