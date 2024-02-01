<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/miCarpeta/styles.css">
    <title>Receta y Comentarios</title>
</head>
<body>

<header>
    <h1><?php echo $receta->nombre; ?></h1>

</header>

<section id="receta">
    <h2>Ingredientes:</h2>
    <ul>
        <li>Ingrediente 1</li>
        <li>Ingrediente 2</li>
        <li>Ingrediente 3</li>
        <!-- Agrega más ingredientes según sea necesario -->
    </ul>

    <h2>Procedimiento:</h2>
    <ol>
       <?php #echo (htmlspecialchars($receta->texto)); ?>
        {{$receta->texto}}

    </ol>
</section>

<section id="comentarios">
    <h2>Comentarios:</h2>
    <?php
        foreach($receta->comentarios as $comentario){
            echo '<div class="comentario"> <p><strong>';
            echo $comentario->autor->nombre_usuario;
            echo ':</strong> ';
            echo $comentario->texto;
            echo '</p></div>';
        }
    ?>

    <div class="nuevo-comentario">
        <h3>Añadir Comentario:</h3>
        <form action="/receta/<?php echo $receta->id?>" method="post">
            @csrf
            <label for="comentario">Comentario:</label>
            <textarea id="comentario" name="comentario" rows="4" required></textarea>
            <label for="valoracion">Valoración:</label>
            <select id="valoracion" name="valoracion" required>
                <option value="1">1 (Muy malo)</option>
                <option value="2">2 (Malo)</option>
                <option value="3">3 (Regular)</option>
                <option value="4">4 (Bueno)</option>
                <option value="5">5 (Excelente)</option>
            </select>
            <br>
            <button type="submit">Publicar Comentario</button>
        </form>
    </div>
</section>

</body>
</html>
