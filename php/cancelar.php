<?php

include('conexao.php');
session_start();
if (isset($_GET["id"])) {
    $id = $_GET["id"];

    $sql = "DELETE FROM agendamentos WHERE id = $id";
    $conn->query($sql);
    header("lista_agendamentos.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <style>
        body {
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        h1 {
            color: red;
            margin: 40px 0;
            font-size: 40px;
        }

        a {
            font-size: 16px;
            text-decoration: none;
            color: white;
        }

        button {
            height: 3pc;
            width: 40%;
            cursor: pointer;
            border-radius: 10px;
            color: white;
            background-color: darkgreen;
            border: none;
        }

        .container {
            display: flex;
            align-items: center;
            flex-direction: column;
            justify-content: center;
            width: 600px;
            height: 400px;
            border-radius: 20px;
            background-color: #cdcdcd;
        }
    </style>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cancelar Viagem</title>
</head>

<body>
    <div class="container">
        <img src="img/log/validation_32px.png" alt="logo verificação">
        <h1>Viagem cancelada com sucesso</h1>
        <button><a href="lista_agendamentos.php">verificar</a></button>
    </div>
</body>

</html>