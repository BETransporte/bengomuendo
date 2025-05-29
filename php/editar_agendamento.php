<?php
session_start();
include("conexao.php");

if (!isset($_SESSION['admin'])) {
    header("Location:index.php");
    exit;
}

$id = $_GET['id'];
$result = $conn->query("SELECT * FROM agendamentos WHERE id = $id");
$dados = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $passeio = $_POST['passeio'];
    $data = $_POST['data'];
    $hora = $_POST['hora'];
    $status = $_POST['status'];

    $conn->query("UPDATE agendamentos SET nome_cliente='$nome',
        passeio = '$passeio',
        data_agendada = '$data',
        hora = '$hora',
        status = '$status' WHERE id = $id");
}
?>
<link rel="stylesheet" href="css/conexaoAgt.css">
<link rel="stylesheet" href="css/responsividade.css">
<h2>Editar agendamentos</h2>

<form method="post">
    <input type="text" name="nome" value="<?= $dados['nome_cliente'] ?>" placeholder="editar seu nome"> <br><br>
    <input type="text" name="passeio" value="<?= $dados['passeio'] ?>" placeholder="editar tipo de viagem"> <br><br>
    <input type="date" name="data" value="<?= $dados['data_agendada'] ?>"> <br><br>
    <input type="time" name="hora" value="<?= $dados['hora'] ?>"><br><br>

    <select name="status">
        <option value="">Editar Estato</option>
        <option value="Pendente"><?= $dados['status'] == "'Pendente'? 'selected':" ?>Pretendente</option>
        <option value="Confirnado"><?= $dados['status'] == "'Confirmado'? 'selected':" ?>Confirmado</option>
    </select>
    <br><br>

    <button type="submit">salvar</button>
    <br>
    <button><a href="/BengoMuenda/php/lista_agendamentos.php">verificar</a></button>
</form>