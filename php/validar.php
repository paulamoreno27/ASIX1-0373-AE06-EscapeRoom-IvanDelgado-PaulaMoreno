<?php
if (isset($_POST['indice']) && strtolower($_POST['pregunta']) == 'ls'){
    session_start();
    $_SESSION['reto2'] = 'check';
    header('Location: ../retos.php');

} elseif(isset($_POST['indice'])) {
    header('Location: ../views/reto1.php?msg=2');

} elseif(isset($_POST['reto2']) && strtolower($_POST['pregunta']) == 'session_start();') {
    session_start();
    $_SESSION['reto3'] = 'check';
    header('Location: ../retos.php');
    
} elseif(isset($_POST['reto2'])) {
    header('Location:../views/reto2.php?msg=se suele escribir al inicio del codigo y no lleva valores');

}  elseif(isset($_POST['reto3']) && strtolower($_POST['pregunta']) == "select * from emp;") {
    session_start();
    $_SESSION['reto4'] = 'check';
    header('Location: ../retos.php');
    
} elseif(isset($_POST['reto3'])) {
    header("Location:../views/reto3.php?msg=comienza con 'SELECT' y obtiene toda la información de la tabla emp.");

}   elseif(isset($_POST['reto4']) && strtolower($_POST['pregunta']) == "80") {
    session_start();
    $_SESSION['final'] = 'check';
    header('Location:../views/final.php');
    
}  elseif(isset($_POST['reto4'])) {
    header("Location:../views/reto4.php?msg=2");
}



?>
