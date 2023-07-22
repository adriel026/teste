<?php
include_once('bd/config.php');

if (isset($_POST['submit'])) {
    $rota = $_POST['rota'];
    $nome = $_POST['nome'];
    $codigo = $_POST['codigo'];

    // Evitar SQL Injection usando prepared statements
    $stmt = $conexao->prepare("INSERT INTO auditoria (rota, nome, codigo) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $rota, $nome, $codigo);

    if ($stmt->execute()) {
        // Redirecionar somente após o cadastro bem-sucedido
        header('Location: cadrota.php');
        exit;
    } else {
        // Em caso de erro, você pode exibir uma mensagem de erro ou fazer algo diferente, dependendo da necessidade do seu projeto.
        echo "Erro ao cadastrar a rota: " . $conexao->error;
    }

    $stmt->close();
}
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
    <form action="cadrota.php" method="post">
      <div class="form-group">
        <label for="rota">Rota:</label>
        <input type="text" id="rota" name="rota" required>
      </div>
      <div class="form-group">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>
      </div>
      <div class="form-group">
        <label for="codigo">Código:</label>
        <input type="text" id="codigo" name="codigo" required>
      </div>
      <div class="form-group">
        <input type="submit" name="submit" value="Cadastrar">
      </div>
    </form>
  </div>

  
</body>
</html>