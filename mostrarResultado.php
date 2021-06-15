<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar resultado</title>
</head>
<body>
<a href="index.php">Volver a la pagina principal</a>
<?php
    
    if (session_status() === PHP_SESSION_NONE) {
    session_start();
    }
    echo "Hey lo has conseguido has acertado el numero com ".$_SESSION['CONTADOR']." intentos, Hey quieres volver a jugar o ya te has cansado?";
?>
<form method="post">
    <input type="submit" name="volverAljuego" value="SI">
    <input type="submit" name="volverAlinicio" value="NO">
</form>
<?php
        if(array_key_exists('volverAljuego', $_POST)) { 
            volverAljuego(); 
        } 
        else if(array_key_exists('volverAlinicio', $_POST)) { 
            volverAlinicio(); 
        }
        function volverAljuego() {
            $tmp = $_SESSION['GAMER'];
            session_unset();
            session_destroy();
            session_start();
            include 'index.php';
            $tmp();
            exit;
        } 
        function volverAlinicio() { 
            header("Location: index.php");
            session_unset();
            session_destroy();
            exit;
        }
    ?>
</body>
</html>