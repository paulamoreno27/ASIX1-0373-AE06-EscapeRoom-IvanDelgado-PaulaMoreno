<?php
session_start();

if (isset($_POST['pregunta'])) {
    $respuesta_usuario = strtolower(trim($_POST['pregunta']));

    // Lista de respuestas correctas
    $respuestas = [
        'reto1' => 'ls',
        'reto2' => 'session_start();',
        'reto3' => 'select * from tbl_clientes;',
        'reto4' => '80'
    ];

    foreach ($respuestas as $reto => $respuesta_correcta) {
        if (isset($_POST[$reto]) && $respuesta_usuario === $respuesta_correcta) {
            $_SESSION[$reto] = 'check'; // Guarda el progreso
            $siguiente_reto = str_replace('reto', '', $reto) + 1; // Calcula el siguiente reto

            if ($siguiente_reto <= 4) {
                header("Location: ../views/reto$siguiente_reto.php");
            } else {
                header("Location: ../views/final.php"); // Si termina, va a la página final
            }
            exit();
        }
    }

    // Si la respuesta es incorrecta, muestra una pista
    $pistas = [
        'reto1' => "2",
        'reto2' => "Se suele escribir al inicio del código y no lleva valores.",
        'reto3' => "Comienza con 'SELECT' y obtiene toda la información de la tabla de clientes.",
        'reto4' => "2"
    ];

    foreach ($pistas as $reto => $pista) {
        if (isset($_POST[$reto])) {
            header("Location: ../views/$reto.php?msg=$pista");
            exit();
        }
    }
}
?>
