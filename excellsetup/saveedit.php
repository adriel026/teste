<?php
include_once('bd/config.php');

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $rota = $_POST['rota'];
    $nome = $_POST['nome'];
    $codigo = $_POST['codigo'];

    $sqlUpdate = "UPDATE auditoria SET rota='$rota', nome='$nome', codigo='$codigo' WHERE id='$id'";

    if ($conexao->query($sqlUpdate) === TRUE) {
        header('Location: kangu.php');
        exit;
    } else {
        echo "Erro ao atualizar os dados: " . $conexao->error;
    }
}
?>
