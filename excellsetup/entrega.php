<?php
include_once('bd/config.php');

if (isset($_GET['id']) && isset($_GET['acao'])) {
  $id = intval($_GET['id']);
  $acao = $_GET['acao'];

  if ($acao === 'entregue' || $acao === 'devolucao') {
    // Obter os dados do registro a ser entregue ou devolvido
    $sql = "SELECT * FROM auditoria WHERE id = $id";
    $result = $conexao->query($sql);
    $registro = mysqli_fetch_assoc($result);

    if ($registro) {
      // Inserir o registro na tabela "entregues"
      $sqlInsert = "INSERT INTO entregues (rota, nome, codigo) VALUES ('".$registro['rota']."', '".$registro['nome']."', '".$registro['codigo']."')";
      if ($conexao->query($sqlInsert) === TRUE) {
        // Excluir o registro da tabela "auditoria"
        $sqlDelete = "DELETE FROM auditoria WHERE id = $id";
        $conexao->query($sqlDelete);
        echo "<script>alert('Registro entregue com sucesso!'); window.location.href = 'kangu.php';</script>";
      } else {
        echo "Erro ao entregar o registro: " . $conexao->error;
      }
    } else {
      echo "Registro não encontrado.";
    }
  } else {
    echo "Ação inválida.";
  }
} else {
  echo "ID do registro ou ação não fornecidos.";
}
?>
