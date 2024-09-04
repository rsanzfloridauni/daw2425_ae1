<?php
session_start();
$palabra = $_SESSION['palabra'];
session_destroy();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lo siento, has perdido</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <div class="container">
        <h1>Lo siento, has perdido :(</h1>
        <p>La palabra era: <strong><?php echo $palabra; ?></strong></p>
        <a href="index.php"><button>Regresar a Inicio</button></a>
    </div>
</body>
</html>