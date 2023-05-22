<?php

    header('Access-Control-Allow-Origin: *');
    header('Content-type: application/json');

    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "Web";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if($conn->connect_error) {
        die("No se pudo conectar".$conn->connect_error);
    }

    $sql = "SELECT * FROM puntuacion WHERE nickname ='". $_POST['nickname']."' ORDER BY puntos DESC ";
    
    $result = $conn->query($sql);

    $productos = array();

    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()) {
            $item = array(
                "nickname" => $row['nickname'],
                "puntos" => $row['puntos'],
                "tiempo" => $row['tiempo'],
                "mapa" => $row['mapa'],
                "dificultad" => $row['dificultad']
            );
            array_push($productos, $item);
        }
        echo json_encode($productos);
    } else {
        echo "sin resultados";
    }

    $conn->close();

?>