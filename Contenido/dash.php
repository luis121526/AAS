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
            <h3 class="texto">Contenido Actual: <span><?php echo $date2  ?></span></h3>
            
            <hr>
            <div class="row container-fluid">
            <div class="col-6 des">
                <h5>Frase De La Semana</h5>
            </div>
            <div class="col-6">
                <img src="../Contenido/fs.jpg" alt="FraseSemanal" class="imgs" title="fsem">
            </div>
            </div>
            <hr>
            <div class="w-100"></div>
            <div class="row container-fluid">
            <div class="col-6 des">
                <h5>Frase Del Mes</h5>
            </div>
            <div class="col-6">
                <img src="../Contenido/fm.jpg" alt="FraseMensual" class="imgs" title="fmes">
            </div>
            </div>
            <hr>
            <div class="w-100"></div>
            <div class="row container-fluid">
            <div class="col-12 des">
                <h5>Frases Diarias (Mes)</h5>
            </div>
            </div>
            <div class="row container-fluid">
                    <div class="col-3">
                    <img src="../img/fm.jpg" alt="Dia1" class="imgs" title="Dia1">
                    </div>
                    <div class="col-3">
                    <img src="../img/fm.jpg" alt="Dia2" class="imgs" title="Dia2">
                    </div>
                    <div class="col-3">
                    <img src="../img/fm.jpg" alt="Dia3" class="imgs" title="Dia3">
                    </div>
                    <div class="col-3">
                    <img src="../img/fm.jpg" alt="Dia4" class="imgs" title="Dia4">
                    </div>
                    <div class="w-100"></div>
                    <br>
                    <div class="col-3">
                    <img src="../img/fm.jpg" alt="Dia5" class="imgs" title="Dia5">
                    </div>
                    <div class="col-3">
                    <img src="../img/fm.jpg" alt="Dia6" class="imgs" title="Dia6">
                    </div>
                    <div class="col-3">
                    <img src="../img/fm.jpg" alt="Dia7" class="imgs" title="Dia7">
                    </div>
                    <div class="col-3">
                    <img src="../img/fm.jpg" alt="Dia8" class="imgs" title="Dia8">
                    </div>
                    <div class="w-100"></div>
                    <br>
                    <div class="col-3">
                    <img src="../img/fm.jpg" alt="Dia9" class="imgs" title="Dia9">
                    </div>
                    <div class="col-3">
                    <img src="../img/fm.jpg" alt="Dia10" class="imgs" title="Dia10">
                    </div>
                    <div class="col-3">
                    <img src="../img/fm.jpg" alt="Dia11" class="imgs" title="Dia11">
                    </div>
                    <div class="col-3">
                    <img src="../img/fm.jpg" alt="Dia12" class="imgs" title="Dia12">
                    </div>
                    <div class="w-100"></div>
                    <br>
                    <div class="col-3">
                    <img src="../img/fm.jpg" alt="Dia13" class="imgs" title="Dia13">
                    </div>
                    <div class="col-3">
                    <img src="../img/fm.jpg" alt="Dia14" class="imgs" title="Dia14">
                    </div>
                    <div class="col-3">
                    <img src="../img/fm.jpg"alt="Dia15" class="imgs" title="Dia15">
                    </div>
                    <div class="col-3">
                    <img src="../img/fm.jpg" alt="Dia16" class="imgs" title="Dia16">
                    </div>
                    <div class="w-100"></div>
                    <br>
                    <div class="col-3">
                    <img src="../img/fm.jpg" alt="Dia17"class="imgs" title="Dia17">
                    </div>
                    <div class="col-3">
                    <img src="../img/fm.jpg" alt="Dia18" class="imgs" title="Dia18">
                    </div>
                    <div class="col-3">
                    <img src="../img/fm.jpg" alt="Dia19" class="imgs" title="Dia19">
                    </div>
                    <div class="col-3">
                    <img src="../img/fm.jpg" alt="Dia20" class="imgs" title="Dia20">
                    </div>
                    <div class="w-100"></div>
                    <br>
                    <div class="col-3">
                    <img src="../img/fm.jpg" alt="Dia21"class="imgs" title="Dia21">
                    </div>
                    <div class="col-3">
                    <img src="../img/fm.jpg" alt="Dia22" class="imgs" title="Dia22">
                    </div>
                    <div class="col-3">
                    <img src="../img/fm.jpg" alt="Dia23" class="imgs" title="Dia23">
                    </div>
                    <div class="col-3">
                    <img src="../img/fm.jpg" alt="Dia24" class="imgs" title="Dia24">
                    </div>
                    <div class="w-100"></div>
                    <br>
                    <div class="col-3">
                    <img src="../img/fm.jpg" alt="Dia25" class="imgs" title="Dia25">
                    </div>
                    <div class="col-3">
                    <img src="../img/fm.jpg" alt="Dia26" class="imgs" title="Dia26">
                    </div>
                    <div class="col-3">
                    <img src="../img/fm.jpg" alt="" class="imgs" title="Dia27">
                    </div>
                    <div class="col-3">
                    <img src="../img/fm.jpg" alt="" class="imgs" title="Dia28">
                    </div>
                    <div class="w-100"></div>
                    <br>
                    <div class="col-3">
                    <img src="../img/fm.jpg" alt="" class="imgs" title="Dia29">
                    </div>
                    <div class="col-3">
                    <img src="../img/fm.jpg" alt="" class="imgs" title="Dia30">
                    </div>
                    <div class="col-3">
                    <img src="../img/fm.jpg" alt="" class="imgs" title="Dia31">
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
        <button class="btn btn-primary" onclick="location.href='../Contenido/cerrarsesion.php'" >Cerrar Sesion</button>
        </div>
    </div>
    
    
</footer>
</html>