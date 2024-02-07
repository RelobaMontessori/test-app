<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/miCarpeta/styles.css">
    <title>Recetas</title>
</head>
<body>
<?php
foreach($recetas as $receta){
    echo "<header>";
    echo "<a href=/receta/".$receta->id."><h1>".$receta->nombre."</h1></a>";
    echo "</header>";
}
?>
</body>
</html>
