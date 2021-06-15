<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adivina jugador</title>
</head>
<body>
    <a href="index.php">Volver a la pagina principal</a>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        <label>Introduce un numero </label>
        <input type="text" name="numerolimite">
        <br>
        <input type="submit">
    </form>
    <?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}



if (!isset($_SESSION['numeroSECRETO'])){
    $_SESSION['numeroSECRETO'] = rand (1, $_SESSION['numerolimite']);
}

if (!isset($_SESSION['CONTADOR'])){
    $_SESSION['CONTADOR'] = 1;
    echo "Vamos a empezar a jugar buena suerte!!!";
}

$resultado=$_SESSION['numeroSECRETO'];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
  $datoIntroducido = $_REQUEST['numerolimite'];
  if (empty($datoIntroducido)) {
    echo "Hey que no has introducido ningun NUMERO revisa";
  } else {
    if ($datoIntroducido < $resultado) {
        echo "El numero es mas grande, que el que hay introducido ";
        $_SESSION['CONTADOR']++;
    } if ($datoIntroducido > $resultado) {
        echo "El numero es mas pequeño, que el numero introducido ";
        $_SESSION['CONTADOR']++;
    } if ($datoIntroducido == $resultado) {
        header("Location: mostrarResultado.php");
        exit; 

    }
  }
}
?>    
</body>
</html>