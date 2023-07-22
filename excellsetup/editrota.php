<?php
include_once('bd/config.php');

if (!empty($_GET['id'])) {
    $id = $_GET['id'];
    $sqlSelect = "SELECT * FROM auditoria WHERE id = $id";
    $result = $conexao->query($sqlSelect);

    if ($result->num_rows > 0) {
        while ($user_data = mysqli_fetch_assoc($result)) {
            $rota = $user_data['rota'];
            $nome = $user_data['nome'];
            $codigo = $user_data['codigo'];
        }
    } else {
        header('Location: kangu.php');
        exit; // Adicione o 'exit' para evitar que o restante do código seja executado
    }
}

?>
?>

<!DOCTYPE html>
<html>
<head>
  <title>Cadastro de rota</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #0f0f0f;
      color: #fff;
      padding: 20px;
    }
    
    .form-container {
      max-width: 400px;
      margin: 0 auto;
      background-color: #141414;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    }
    
    .form-container h2 {
      font-size: 24px;
      margin-bottom: 20px;
    }
    
    .form-group {
      margin-bottom: 20px;
    }
    
    .form-group label {
      display: block;
      font-size: 18px;
      margin-bottom: 10px;
    }
    
    .form-group input {
      width: 100%;
      padding: 10px;
      font-size: 16px;
      border-radius: 5px;
      border: none;
    }
    
    .form-group input[type="submit"] {
      background-color: #003791;
      color: #fff;
      cursor: pointer;
    }
    
    .form-group input[type="submit"]:hover {
      background-color: #002366;
    }
  </style>
</head>
<body>

<a href="kangu.php">Voltar</a>
<div class="form-container">
  <h2>Cadastro de Rota</h2>
  <form action="saveedit.php" method="post">
      <div class="form-group">
        <label for="rota">Rota:</label>
        <input type="text" id="rota" name="rota" value="<?php echo $rota ?>" required>
      </div>
      <div class="form-group">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" value="<?php echo $nome ?>" required>
      </div>
      <div class="form-group">
        <label for="codigo">Código:</label>
        <input type="number" id="codigo" name="codigo" value="<?php echo $codigo ?>" required>
      </div>
      <!-- Adicionando o campo oculto para enviar o ID da rota -->
      <input type="hidden" id="id" name="id" value="<?php echo $id ?>">
      <div class="form-group">
        <!-- Adicionando o atributo "name" ao botão de "Salvar" -->
        <input type="submit" name="update" id="update" value="Salvar">
      </div>
    </form>
  </div>
</body>
</html>

