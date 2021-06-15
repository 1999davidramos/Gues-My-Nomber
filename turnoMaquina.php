<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adivina maquina</title>
</head>
<body>
<a href="index.php">Volver a la pagina principal</a>
<br>
<form method="post">
    <input type="submit" name="correcto" value="Es CORRECTO!!!" />
    <input type="submit" name="NumeroPeque" value="EL numero es mas PEQUEÑO" />
    <input type="submit" name="NumeroGrande" value="EL numero es mas GRANDE" />
</form> 
<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if(array_key_exists('correcto', $_POST)) {
    correcto(); 
} 
else if(array_key_exists('NumeroPeque', $_POST)) {
    NumeroPeque(); 
}
else if(array_key_exists('NumeroGrande', $_POST)) {
    NumeroGrande(); 
}

if (!isset($_SESSION['IntentosRealizados'])){
    $_SESSION['IntentosRealizados'] = 0;
}

if (!isset($_SESSION['pequeNum'])){
    $_SESSION['pequeNum'] = 1;
}

if (!isset($_SESSION['grandeNun'])){
    $_SESSION['grandeNun'] = $_SESSION['numerolimite'];
}

if (!isset($_SESSION['CONTADOR'])){
    $_SESSION['CONTADOR'] = 0;
    adivinaNumero();
}


function adivinaNumero() {
    $_SESSION['CONTADOR']++;
    $_SESSION['IntentosRealizados'] = rand ($_SESSION['pequeNum'], $_SESSION['grandeNun']);
    echo "El numero es ".$_SESSION['IntentosRealizados']."?";
}

function NumeroPeque() {
    $_SESSION['grandeNun'] = ($_SESSION['IntentosRealizados']-1);
    adivinaNumero();
}

function NumeroGrande() {
    $_SESSION['pequeNum'] = ($_SESSION['IntentosRealizados']+1);
    adivinaNumero();
}

function correcto() {
        header("Location: mostrarResultado.php");
        exit; 
}
?>


</body>
</html>