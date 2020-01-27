<?php 

header('Content-Type: Application/json');
header("Access-Control-Allow-Origin: *");//habilitar cors para las peticiones a otro servidor


if($_GET['moneda']=='dolar' || $_GET['moneda']=='euro'){
    require_once('./conexion.php');

    $sql = "SELECT * FROM ". $_GET['moneda'];
    $resultado = $pdo->prepare($sql);
    $resultado->execute();
    $row = $resultado->fetchAll();
    
    echo json_encode($row);
 
}else {
    echo json_encode(["message"=>"solicitud no encontrada"]) ;
    die();
}



