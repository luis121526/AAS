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
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-dashboard" width="28" height="28" viewBox="0 0 24 24" stroke-width="2" stroke="#00abfb" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <circle cx="12" cy="13" r="2" />
                <line x1="13.45" y1="11.55" x2="15.5" y2="9.5" />
                <path d="M6.4 20a9 9 0 1 1 11.2 0z" />
                </svg>
            </span></h4>
        </div>
        <div class="userdata col-5">
            <h4>Usuario <span>
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user" width="28" height="28" viewBox="0 0 24 24" stroke-width="2" stroke="#00abfb" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <circle cx="12" cy="7" r="4" />
                <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                </svg>
            </span></h4>
        </div>
        <div class=" cs col-2">
            <button class="btn btn-primary btn-sm">Ver Gaceta
                <span>
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-logout" width="28" height="28" viewBox="0 0 24 24" stroke-width="2" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2" />
                <path d="M7 12h14l-3 -3m0 6l3 -3" />
                </svg>
                </span>
            </button>
        </div>
        <div class=" cs col-2">
            <button class="btn btn-primary btn-sm" onclick="location.href='../Contenido/cerrarsesion.php'">Cerrar Sesion
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-logout" width="28" height="28" viewBox="0 0 24 24" stroke-width="2" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2" />
                <path d="M7 12h14l-3 -3m0 6l3 -3" />
                </svg>
            </span>
            </button>
        </div>
    </header>
<body>
      <section class="row container-fluid prin ">
            <div class="col-2 barralat">
            <br>
            <button class="btn btn-primary" onclick="location.href='../Contenido/dash.php'"> <span>
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-aspect-ratio" width="36" height="36" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
            <rect x="3" y="5" width="18" height="14" rx="2" />
            <path d="M7 12v-3h3" />
            <path d="M17 12v3h-3" />
            </svg>
            </span>Panel Principal </button>
            <hr>
            <button class="btn btn-primary" onclick="location.href='../Contenido/carga_fs.php'"> <span>
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-aspect-ratio" width="36" height="36" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
            <rect x="3" y="5" width="18" height="14" rx="2" />
            <path d="M7 12v-3h3" />
            <path d="M17 12v3h-3" />
            </svg>
            </span> Frase Semanal </button>
            <hr>
            <button class="btn btn-primary" onclick="location.href='../Contenido/carga_fm.php'">
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
            <button class="btn btn-primary" onclick="location.href='../Contenido/carga_fd.php'">
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
            </div>
            <div class="col-9 vista">    
            <h3 class="texto">Cargar Frase Diaria</h3>
            
            <hr>
            <div class="row container-fluid">
                <div class="col-4">
                    <h5>Imagen Actual</h5>
                </div>
                <div class="col-8">
                    <img src="../img/fs.jpg" alt="imagen" title="fs" class="imgs">
                </div>
            </div>
            <div class="w-100"></div>
            <hr>
            <div class="row container-fluid">
                <div class="col anotacion2">
                   <h5 class="text-center">Arrastra tu imágen o cargala desde el botón</h5>
                   <hr>
                   <form action="" method="POST">
                       <label for="fecha1"><?php echo 'Imágen para día '.date("d-m-Y",strtotime($date2));?></label>
                       <input type="file" name="archivo" src="../Contenido/fs.jpg" class="btn btn-primary">
                       <br>
                       <label for="fecha1"><?php echo 'Imágen para día '.date("d-m-Y",strtotime($date2."+ 1 day"));?></label>
                       <input type="file" name="archivo" src="../Contenido/fs.jpg" class="btn btn-primary">
                       <br>
                       <label for="fecha1"><?php echo 'Imágen para día '.date("d-m-Y",strtotime($date2."+ 2 day"));?></label>
                       <input type="file" name="archivo" src="../Contenido/fs.jpg" class="btn btn-primary">
                       <br>
                       <label for="fecha1"><?php echo 'Imágen para día '.date("d-m-Y",strtotime($date2."+ 3 day"));?></label>
                       <input type="file" name="archivo" src="../Contenido/fs.jpg" class="btn btn-primary">
                       <br>
                       <label for="fecha1"><?php echo 'Imágen para día '.date("d-m-Y",strtotime($date2."+ 4 day"));?></label>
                       <input type="file" name="archivo" src="../Contenido/fs.jpg" class="btn btn-primary">
                       <br>
                       <label for="fecha1"><?php echo 'Imágen para día '.date("d-m-Y",strtotime($date2."+ 5 day"));?></label>
                       <input type="file" name="archivo" src="../Contenido/fs.jpg" class="btn btn-primary">
                       <br>
                       <label for="fecha1"><?php echo 'Imágen para día '.date("d-m-Y",strtotime($date2."+ 6 day"));?></label>
                       <input type="file" name="archivo" src="../Contenido/fs.jpg" class="btn btn-primary">
                       <br>
                       <label for="fecha1"><?php echo 'Imágen para día '.date("d-m-Y",strtotime($date2."+ 7 day"));?></label>
                       <input type="file" name="archivo" src="../Contenido/fs.jpg" class="btn btn-primary">
                       <br>
                       <label for="fecha1"><?php echo 'Imágen para día '.date("d-m-Y",strtotime($date2."+ 8 day"));?></label>
                       <input type="file" name="archivo" src="../Contenido/fs.jpg" class="btn btn-primary">
                       <br>
                       <label for="fecha1"><?php echo 'Imágen para día '.date("d-m-Y",strtotime($date2."+ 9 day"));?></label>
                       <input type="file" name="archivo" src="../Contenido/fs.jpg" class="btn btn-primary">
                       <br>
                       <label for="fecha1"><?php echo 'Imágen para día '.date("d-m-Y",strtotime($date2."+ 10 day"));?></label>
                       <input type="file" name="archivo" src="../Contenido/fs.jpg" class="btn btn-primary">
                       <br>
                       <label for="fecha1"><?php echo 'Imágen para día '.date("d-m-Y",strtotime($date2."+ 11 day"));?></label>
                       <input type="file" name="archivo" src="../Contenido/fs.jpg" class="btn btn-primary">
                       <br>
                       <label for="fecha1"><?php echo 'Imágen para día '.date("d-m-Y",strtotime($date2."+ 12 day"));?></label>
                       <input type="file" name="archivo" src="../Contenido/fs.jpg" class="btn btn-primary">
                       <br>
                       <label for="fecha1"><?php echo 'Imágen para día '.date("d-m-Y",strtotime($date2."+ 13 day"));?></label>
                       <input type="file" name="archivo" src="../Contenido/fs.jpg" class="btn btn-primary">
                       <br>
                       <label for="fecha1"><?php echo 'Imágen para día '.date("d-m-Y",strtotime($date2."+ 14 day"));?></label>
                       <input type="file" name="archivo" src="../Contenido/fs.jpg" class="btn btn-primary">
                       <br>
                       <label for="fecha1"><?php echo 'Imágen para día '.date("d-m-Y",strtotime($date2."+ 15 day"));?></label>
                       <input type="file" name="archivo" src="../Contenido/fs.jpg" class="btn btn-primary">
                       <br>
                       <label for="fecha1"><?php echo 'Imágen para día '.date("d-m-Y",strtotime($date2."+ 16 day"));?></label>
                       <input type="file" name="archivo" src="../Contenido/fs.jpg" class="btn btn-primary">
                       <br>
                       <label for="fecha1"><?php echo 'Imágen para día '.date("d-m-Y",strtotime($date2."+ 17 day"));?></label>
                       <input type="file" name="archivo" src="../Contenido/fs.jpg" class="btn btn-primary">
                       <br>
                       <label for="fecha1"><?php echo 'Imágen para día '.date("d-m-Y",strtotime($date2."+ 18 day"));?></label>
                       <input type="file" name="archivo" src="../Contenido/fs.jpg" class="btn btn-primary">
                       <br>
                       <label for="fecha1"><?php echo 'Imágen para día '.date("d-m-Y",strtotime($date2."+ 19 day"));?></label>
                       <input type="file" name="archivo" src="../Contenido/fs.jpg" class="btn btn-primary">
                       <br>
                       <label for="fecha1"><?php echo 'Imágen para día '.date("d-m-Y",strtotime($date2."+ 20 day"));?></label>
                       <input type="file" name="archivo" src="../Contenido/fs.jpg" class="btn btn-primary">
                       <br>
                       <label for="fecha1"><?php echo 'Imágen para día '.date("d-m-Y",strtotime($date2."+ 21 day"));?></label>
                       <input type="file" name="archivo" src="../Contenido/fs.jpg" class="btn btn-primary">
                       <br>
                       <label for="fecha1"><?php echo 'Imágen para día '.date("d-m-Y",strtotime($date2."+ 22 day"));?></label>
                       <input type="file" name="archivo" src="../Contenido/fs.jpg" class="btn btn-primary">
                       <br>
                       <label for="fecha1"><?php echo 'Imágen para día '.date("d-m-Y",strtotime($date2."+ 23 day"));?></label>
                       <input type="file" name="archivo" src="../Contenido/fs.jpg" class="btn btn-primary">
                       <br>
                       <label for="fecha1"><?php echo 'Imágen para día '.date("d-m-Y",strtotime($date2."+ 24 day"));?></label>
                       <input type="file" name="archivo" src="../Contenido/fs.jpg" class="btn btn-primary">
                       <br>
                       <label for="fecha1"><?php echo 'Imágen para día '.date("d-m-Y",strtotime($date2."+ 25 day"));?></label>
                       <input type="file" name="archivo" src="../Contenido/fs.jpg" class="btn btn-primary">
                       <br>
                       <label for="fecha1"><?php echo 'Imágen para día '.date("d-m-Y",strtotime($date2."+ 26 day"));?></label>
                       <input type="file" name="archivo" src="../Contenido/fs.jpg" class="btn btn-primary">
                       <br>
                       <label for="fecha1"><?php echo 'Imágen para día '.date("d-m-Y",strtotime($date2."+ 27 day"));?></label>
                       <input type="file" name="archivo" src="../Contenido/fs.jpg" class="btn btn-primary">
                       <br>
                       <label for="fecha1"><?php echo 'Imágen para día '.date("d-m-Y",strtotime($date2."+ 28 day"));?></label>
                       <input type="file" name="archivo" src="../Contenido/fs.jpg" class="btn btn-primary">
                       <br>
                       <label for="fecha1"><?php echo 'Imágen para día '.date("d-m-Y",strtotime($date2."+ 29 day"));?></label>
                       <input type="file" name="archivo" src="../Contenido/fs.jpg" class="btn btn-primary">
                       <br>
                       <label for="fecha1"><?php echo 'Imágen para día '.date("d-m-Y",strtotime($date2."+ 30 day"));?></label>
                       <input type="file" name="archivo" src="../Contenido/fs.jpg" class="btn btn-primary">
                       <br>
                       <label for="fecha1"><?php echo 'Imágen para día '.date("d-m-Y",strtotime($date2."+ 31 day"));?></label>
                       <input type="file" name="archivo" src="../Contenido/fs.jpg" class="btn btn-primary">
                       <br>
                       <hr>
                       <input type="submit" class="btn btn-primary" value="Cargar" class="btn btn-primary">
                   </form>

                </div>
            </div>
                    
            </div>
            </div>
      </section>
      
</body>
<footer class="pie">
    <div class="row container-fluid">
        <div class="col-9">
        <p>SICASA S.A De C.V     <?php echo date("Y") ?>     Todos Los Derechos Reservados</p>

        </div>
        <div class="col-3 cs">
        <button class="btn btn-primary"onclick="location.href='../Contenido/cerrarsesion.php'" >Cerrar Sesion</button>
        </div>
    </div>
    
    
</footer>
</html>