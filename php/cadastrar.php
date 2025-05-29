<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/conexaoAgt.css">
    <link rel="stylesheet" href="css/responsividade.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>agendar</title>
</head>

<body>
    <form action="envio.php" method="post">
        <img src="userLock.png" alt="agendarImg">
        <br>
        <p>Faça já o seu agendamento</p>
        <br>
        <input type="text" name="nome" id="nome" placeholder="digite seu nome" required>
        <br><br>
        <input type="text" name="passeio" id="passeio" placeholder="digite o tipo de passeio" required>
        <br><br>
        <input type="date" name="data" id="data" required>
        <br><br>
        <input type="time" name="hora" id="hora" placeholder="" required>
        <br><br>
        <select name="status" class="status">
            <option value="">Selecione Estato</option>
            <option value="Pendente">Pretendente</option>
            <option value="Confirnado">Confirmado</option>
        </select>
        <br>
        <button type="submit">agendar</button>
        <br>
        <button type="button" class="btn"><a href="/BengoMuenda/index.html">Voltar ao página
                principal</a></button>
    </form>
</body>

</html>