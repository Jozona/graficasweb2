<?php


    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "Web";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if($conn->connect_error) {
        die("No se pudo conectar".$conn->connect_error);
    }
    
    $sql = "INSERT INTO puntuacion(nickname, puntos, tiempo, mapa, dificultad) VALUES ('" . $_POST['name'] . "', ". $_POST['time'] ." ,". $_POST['puntos'] .", '" . $_POST['mapa'] . "', '" . $_POST['dificultad'] . "')";
    echo($sql);
    $conn->query($sql);
    $conn->close();
?>