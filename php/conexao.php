<?php

$host = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'agendarv1';

$conn = new mysqli($host, $usuario, $senha, $banco);

if ($conn->connect_error) {
    die("erro de conexão: " . $conn->connect_error);
}
?>