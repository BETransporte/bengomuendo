<?php

include("conexao.php");
$nome = $_POST["nome"];
$passeio = $_POST["passeio"];
$data = $_POST["data"];
$hora = $_POST["hora"];
$status = $_POST["status"];

$sql = "INSERT INTO agendamentos(nome_cliente, passeio, data_agendada, hora, status) VALUES ('$nome', '$passeio', '$data', '$hora', '$status')";

if ($conn->query($sql) === TRUE) {
    echo "agendamento efetuado com sucesso";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gratidão</title>
    <link rel="shortcut icon" href="icons/icons/c.png" type="image/x-icon">
    <style>
        * {
            margin: 0;
            padding: 0;
            list-style: none;
            text-decoration: none;
        }

        a {
            color: white;
        }

        body {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            height: 100vh;
            color: black;
            text-align: center;
            background-color: #eee;
            background-size: cover;
        }

        .main h1 {
            font-size: 60px;
            margin: 30px 0;
        }

        .main p {
            font-size: 20px;
            margin: 30px 0;
        }

        .main button {
            height: 3pc;
            width: 80%;
            cursor: pointer;
            border-radius: 3px;
            color: white;
            background-color: darkblue;
            border: none;
        }
    </style>
</head>

<body>
    <div class="main">
        <img src="icons/icons/userLock.png" alt="">
        <h1>Obrigado pelo seu apoio</h1>
        <p>muito embreve entraremos em contacto</p>
        <button><a href="/BengoMuenda/index.html">Voltar</a></button>
    </div>
</body>

</html>