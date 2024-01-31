<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/miCarpeta/unCSS.css">
    <title>Bienvenido</title>
</head>
<body>
    <header>
        <h1>Bienvenido a Nuestra Página</h1>
        <br>
        <?php
            if(session()->has('nombre_usuario')){
        ?>
                <a href="/perfil"> Mi perfil </a>
                <br>
        <?php
        }
            else{
        ?>
        <a href="/registro"> Registrarse </a>
        <br>
        <a href="/login"> Login </a>
        <?php
            }
            ?>
        <br>

    </header>
    <section class="main-content">
        <p>Gracias por visitar nuestra página de bienvenida. Aquí encontrarás información interesante y emocionante.</p>
    </section>
    <footer>
        <p>&copy; 2024 Nuestra Página. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
