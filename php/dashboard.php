<?php
session_start();

// <?php echo $_SESSION['admin']; fechamento here
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Bengo Muenda Dashboard</title>
    <link rel="stylesheet" href="css/">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            list-style: none;
            text-decoration: none;
        }

        body {
            font-family: 'Montserrat', sans-serif;
            background: #f0f7f4;
            color: #333;
            height: 100vh;
            overflow: hidden;
        }

        a {
            color: rgb(1, 88, 1);
        }

        .top-image {
            background: url('https://images.unsplash.com/photo-1507525428034-b723cf961d3e') no-repeat center center;
            background-size: cover;
            height: 180px;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            font-size: 40px;
            font-weight: 600;
            color: rgb(1, 88, 1);
        }

        .main-content {
            display: flex;
            height: calc(100vh - 180px);
        }


        .cards-section {
            flex: 2;
            display: flex;
            flex-direction: column;
            gap: 20px;
            padding: 20px;
            overflow-y: auto;
        }

        .image-section img {
            width: 900px;
            height: 570px;
            padding: 10px;
            box-shadow: 0px 5px 5px 5px rgba(0, 0, 0, 0.2);
        }

        .card {
            background: #ffffff;
            color: #003300;
            padding: 20px;
            border-radius: 12px;
            text-align: center;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.12);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            cursor: pointer;
            position: relative;
            height: 200px;
        }

        .card:hover {
            transform: translateY(-4px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
        }

        .icon {
            font-size: 40px;
            margin-bottom: 10px;
        }

        .counter {
            background: #ff7043;
            border-radius: 50%;
            padding: 6px 12px;
            color: white;
            font-weight: bold;
            font-size: 14px;
            position: absolute;
            top: 10px;
            right: 10px;
        }

        @media (max-width: 768px) {
            .main-content {
                flex-direction: column;
            }

            .image-section,
            .cards-section {
                flex: none;
                height: auto;
            }

            .image-section {
                height: 300px;
            }
        }
    </style>
</head>

<body>

    <div class="top-image">
        Explore destinos incríveis pela natureza!
    </div>

    <div class="main-content">
        <!-- Vídeo à esquerda
        <div class="image-section">
            <img src="adm.png" alt="">
        </div> -->

        <!-- Cards à direita -->
        <div class="cards-section">
            <div class="card" onclick="verAgendamentos()">
                <div class="icon">📅</div>
                <h3><a href="lista_agendamentos.php"><img src="img/log/verify2.png" alt="image"> Ver agendamentos</a>
                </h3>
            </div>

            <div class="card" onclick="verMensagens()">
                <div class="icon">💬</div>
                <h3><a href="https://mail.google.com/mail/u/1/#inbox" target="_black"><img src="img/log/email.png" alt="image"> Ver mensagens(e-mail)</a></h3>
            </div>

        </div>
        <div class="cards-section">
            <div class="card" onclick="contatarEspecialista()">
                <div class="icon">🧭</div>
                <h3><a href="tel:876168023"><img src="img/log/call2.png" alt="image "> Contatar especialista</a></h3>
            </div>

            <div class="card" onclick="terminarSessao()">
                <div class="icon">🚪</div>
                <h3><a href="logout.php"><img src="img/log/close2.png" alt="image "> Terminar sessão</a></h3>
            </div>
        </div>

    </div>

</body>

</html>