<?php
    session_start();
    if (!$_SESSION["reto4"] == 'check'){
        header("Location: ../index.php?error=pillo");
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reto 4: Redes</title>
    <link rel="stylesheet" href="../css/estilos.css">

</head>
<body>
    <div class="container">
    <h1>Reto 4: Redes</h1>
    <p>¿Qué puerto utiliza el protocolo HTTP para la comunicación en la web?</p>
    <form action="../php/validar.php" method="post">
        <input type="text" name="pregunta" placeholder="Escribe tu respuesta">
        <input type="submit" name="reto4">
    </form>
    
    <?php
        if (isset($_GET['msg'])) {
            echo "<p>Error, pista: El comando tiene " . $_GET['msg'] . " digitos</p>";
        }
    ?>
    </div>
</body>
</html>
