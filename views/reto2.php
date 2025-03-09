<?php
    session_start();
    if (!$_SESSION["reto2"] == 'check'){
        header("Location: ../index.php?error=pillo");
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reto 2</title>
    <link rel="stylesheet" href="../css/estilos.css">

</head>
<body>
    <div class="container">
    <h1>Reto 2: Implantación Web</h1>
    <p>¿Cuál es el comando en PHP que se utiliza para iniciar una nueva sesión o reanudar una sesión existente, permitiendo el uso de variables de sesión a lo largo de varias páginas?</p>
    <form action="../php/validar.php" method="post">
        <input type="text" name="pregunta" placeholder="Escribe tu respuesta">
        <input type="submit" name="reto2">
    </form>
    
    <?php
    if (isset($_GET['msg'])){
        echo "<p>Error, pista: El comando " . $_GET['msg'] . "</p>";
    }
    ?>
    </div>
</body>
</html>
