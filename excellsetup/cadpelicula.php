<?php
if(isset($_POST['submit']))
{
  include_once('bd/config.php');

  $marca = $_POST['marca'];
  $modelo = $_POST['modelo'];
  $compatibilidade = $_POST['compatibilidade'];

  $stmt = $conexao->prepare("INSERT INTO pelicula (marca, modelo, compatibilidade) VALUES (?,?,?)");
  $stmt->bind_param("sss", $marca, $modelo, $compatibilidade);
  $stmt->execute();
  $stmt->close();

  $conexao->close();
}
?>


<!DOCTYPE html>
<html>
<head>
  <title>Cadastro de película</title>
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

    .back-btn {
  color: #107c10;
  font-size: 14px;
  text-decoration: none;
  display: inline-block;
  margin-bottom: 10px;
  transition: 0.3s;
}

.back-btn:hover {
  text-decoration: underline;
}
  </style>
</head>
<body>

<a href="base.php" class="back-btn">&#8592; Voltar</a>
  <div class="form-container">
    <h2>Cadastro de Película</h2>
    <form action="cadpelicula.php" method="post">
      <div class="form-group">
        <label for="marca">Marca:</label>
        <input type="text" id="marca" name="marca" required>
      </div>
      <div class="form-group">
        <label for="modelo">Modelo:</label>
        <input type="text" id="modelo" name="modelo" required>
      </div>
      <div class="form-group">
        <label for="compatibilidade">Compatibilidade:</label>
        <input type="text" id="compatibilidade" name="compatibilidade" required>
      </div>
      <div class="form-group">
        <input type="submit" name="submit" value="Cadastrar">
      </div>
    </form>
  </div>
</body>
</html>
