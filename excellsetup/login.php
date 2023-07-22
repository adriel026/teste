<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Xbox One Login</title>
  <link rel="stylesheet" href="style.css">
  <style>
    body {
  margin: 0;
  padding: 0;
  font-family: Arial, sans-serif;
  background-color: #0f0f0f;
  color: #fff;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
}

.container {
  max-width: 400px;
  width: 90%;
  background-color: #1b1b1b;
  padding: 30px;
  border-radius: 10px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
}

.login-box {
  text-align: center;
}

.login-box img {
  width: 100px;
  height: auto;
  margin-bottom: 20px;
}

.login-box h2 {
  font-size: 24px;
  margin-bottom: 20px;
}

.user-box {
  position: relative;
  margin-bottom: 20px;
}

.user-box input {
  width: 100%;
  padding: 10px;
  font-size: 16px;
  border: none;
  border-bottom: 2px solid #107c10;
  background-color: transparent;
  color: #fff;
  border-radius: 4px;
  outline: none;
}

.user-box label {
  position: absolute;
  top: 0;
  left: 0;
  padding: 10px;
  font-size: 16px;
  color: #6c6c6c;
  pointer-events: none;
  transition: 0.5s;
}

.user-box input:focus ~ label,
.user-box input:valid ~ label {
  top: -20px;
  left: 0;
  color: #107c10;
  font-size: 14px;
}

.button {
  display: block;
  width: 100%;
  padding: 10px;
  font-size: 16px;
  background-color: #107c10;
  color: #fff;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  transition: 0.3s;
}

.button:hover {
  background-color: #005306;
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
    
  <div class="container">
  <a href="base.php" class="back-btn">&#8592; Voltar</a>
    <div class="login-box">
      <img src="img/excelllogo.png" alt="Xbox One Logo">
      <h2>Login</h2>
      <form action="testlogin.php"  method="POST">
        <div class="user-box">
          <input type="text" id="usuario" name="usuario" required>
          <label for="usuario">Usuário</label>
        </div>
        <div class="user-box">
          <input type="password" id="senha" name="senha" required>
          <label for="senha">Senha</label>
        </div>
        <input class="button" type="submit" name="submit" value="Entrar">
      </form>
    </div>
  </div>
</body>
</html>
