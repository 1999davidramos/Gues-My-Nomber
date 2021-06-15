<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gues My namber</title>
</head>
<body>
<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}else{
    session_unset();
    session_destroy();
    session_start();
}

        if(array_key_exists('u10', $_POST)) { 
            u10(); 
        } 
        else if(array_key_exists('u50', $_POST)) { 
            u50(); 
        }
        else if(array_key_exists('u100', $_POST)) { 
            u100(); 
        } 
        else if(array_key_exists('m10', $_POST)) { 
            m10(); 
        } 
        else if(array_key_exists('m50', $_POST)) { 
            m50(); 
        } 
        else if(array_key_exists('m100', $_POST)) { 
            m100(); 
        } 
        function u10() {
            $_SESSION['numerolimite'] = 10;
            $_SESSION['GAMER'] = "u10";
            header("Location: jugador.php");
            exit; 
        } 
        function u50() {
            $_SESSION['numerolimite'] = 50;
            $_SESSION['GAMER'] = "u50";
            header("Location: jugador.php");
            exit;
        }
        function u100() { 
            $_SESSION['numerolimite'] = 100;
            $_SESSION['GAMER'] = "u100";
            header("Location: jugador.php");
            exit; 
        } 
        function m10() {
            $_SESSION['numerolimite'] = 10;
            $_SESSION['GAMER'] = "m10";
            header("Location: turnoMaquina.php");
            exit;
        }
        function m50() { 
            $_SESSION['numerolimite'] = 50;
            $_SESSION['GAMER'] = "m50";
            header("Location: turnoMaquina.php");
            exit; 
        } 
        function m100() {
            $_SESSION['numerolimite'] = 100;
            $_SESSION['GAMER'] = "m100";
            header("Location: turnoMaquina.php");
            exit;
        }
    ?>    
        <h1>Bienvenido a nuestro juego llamado Guess my number</h1>
        <h2>informacion</h2>
        <h3>Niveles del juego</h3>
        <h4>El primer nivel, el rango de numero es de 1 a 10</h4>
        <h4>El segundo nivel, el rango de numeros es de 1 a 50</h4>
        <h4>El tercer y ultimo nivel, el rango de numeros es de 1 a 100</h4>
    <form method="post">
    <h3>Primera Modalidad</h3>
        <h4>Encontrar el número que se ha inventado el / la jugador / a.</h4>        
    <input type="submit" name="u10"
           class="button" value="Adivina tu 10" />
    
    <input type="submit" name="u50"
           class="button" value="Adivina tu 50" />
    
    <input type="submit" name="u100"
           class="button" value="Adivina tu 100" />
           <h3>Segunda Modalidad</h3>
        <h4>La aplicacion se inventara un numero que debe de buscar el jugador</h4>           
    <input type="submit" name="m10"
           class="button" value="Adivina la maquina 10" />
    
    <input type="submit" name="m50"
           class="button" value="Adivina la maquina 50" />
    
    <input type="submit" name="m100"
           class="button" value="Adivina la maquina 100" />        
    </form>
</body>
</html>