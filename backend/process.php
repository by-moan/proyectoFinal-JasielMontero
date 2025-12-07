<?php
header("Content-Type: application/json");

$json = file_get_contents('php://input');
$data = json_decode($json, true);

$action = $data["action"] ?? null;


function init() {
    $con = mysqli_connect("localhost", "root", "", "hotel");
    if(!$con){
        echo json_encode([
            "status" => "ERROR",
            "message" => "La conexión a la base de datos no fue exitosa "
        ]);
        die("error en la conexión". mysqli_connect_error());
    }
    return $con;
};

if ($action === "REGISTRAR_RESERVACION") {
    $con = init();
    
    $nombre = $data["nombre"];
    $email = $data["email"];
    $cuarto = $data["cuarto"];
    $fecha = $data["fecha"];
    
    $query = "INSERT INTO reservaciones (correo, nombre, diaReservacion, nombreCuarto) VALUES ('$email','$nombre','$fecha','$cuarto')";
    
    if($con->query($query)){
        echo json_encode([
            "status" => "OK",
            "message" => "La reservación se ha hecho con exito!"
        ]);
    }else{
        echo json_encode([
            "status" => "ERR_IN_QUERY",
            "message" => "La reservación no se ha hecho correctamente (Error: ERR_IN_QUERY)"
        ]);
    }
}else if ($action === "REVISAR_RESERVACION") {
    $con = init();

    //Proteger inyección SQL
    $query = $con->prepare("SELECT nombre,diaReservacion,nombreCuarto from reservaciones where correo = ?");
    $query->bind_param("s", $data["correo"]);
    $query->execute();

    $resultado = $query->get_result();

    if($resultado->num_rows === 0){
        echo json_encode([
            "status" => "OK",
            "message" => "No tiene ninguna reservación disponible"
        ]);
    }else {
        $data = $resultado->fetch_all();

        $fila = $resultado->fetch_assoc();

        $nombre = $fila["nombre"];
        $fecha = $fila["fecha"];
        echo json_encode([
            "status" => "OK",
            "message" => "$nombre tiene una reservación hecha para $fecha",
            "data" => $data
        ]);
    }
} else {
    echo json_encode([
        "status" => "error",
        "message" => "Unknown action"
    ]);
}
