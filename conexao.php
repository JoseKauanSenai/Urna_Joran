<?php

$hostname = "localhost:3307";
$bancodedados = "urna";
$usuario = "root";
$senha = "";
                                                      
$conn = new mysqli($hostname, $usuario, $senha, $bancodedados);

if ($conn->connect_error){
    die( "🔴" . $conn->connect_error);
}else{
    echo "🟢";
}

?>