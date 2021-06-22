<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preload" href="css/bootstrap.min.css" as="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
    <link re="preload" href="css/especial.css" as="stylesheet">
    <link rel="stylesheet" href="css/especial.css" type="text/css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet"> 
    <title>A.C.G</title>
</head>
<body>
    <header class="cabeza"><h1>Administrador De Contenido Gaceta</h1></header>
    <main>
        <form action="" method="POST" class="menu1" >
            <div class="form-group">
            <fieldset>
                <legend>Ingresa Tus Credenciales</legend>
                <div>
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-soundcloud" width="56" height="56" viewBox="0 0 24 24" stroke-width="2" stroke="#7bc62d" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M17 11h1c1.38 0 3 1.274 3 3c0 1.657 -1.5 3 -3 3l-6 0v-10c3 0 4.5 1.5 5 4z" />
                    <line x1="9" y1="8" x2="9" y2="17" />
                    <line x1="6" y1="17" x2="6" y2="10" />
                    <line x1="3" y1="16" x2="3" y2="14" />
                    </svg>
                </div>
                <br>
                <div class="form-group">
                    <label for="Nombre">Usuario:</label>
                    <input type="text" name="Usuario" placeholder="Nombre Usuario">
                </div>
                <br>
                <div>
                    <label for="Contra">Contraseña:</label>
                    <input type="password" name="Contra" placeholder="Contraseña">
                </div>
                <br>
                <div class="form-group">
                    <input class="btn btn-success" type="submit" name="Enviar" value="Acceder">
                </div>
            </fieldset>
            </div>
        </form>    
    </main>
</body>
<footer class="pie">
    
    <p>SICASA S.A De C.V     <?php echo date("Y") ?>     Todos Los Derechos Reservados</p>
    
</footer>
<script src="js/bootstrap.min.js"></script>
</html>