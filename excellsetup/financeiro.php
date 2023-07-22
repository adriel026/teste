<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard Xbox Series S</title>
  <link rel="stylesheet" href="style.css">
  <style>
    /* Estilos do dashboard Xbox Series S */

/* Estilos gerais */
body {
  margin: 0;
  padding: 0;
  font-family: Arial, sans-serif;
  background-color: #000;
  color: #fff;
}

.container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 20px;
}

header {
      background-color: #096800;
      padding: 10px;
      text-align: center;
    }
    
    .logo {
      width: 100px;
    }
    
    nav {
      background-color: #141414;
      padding: 10px 0;
      text-align: center;
    }
    
    nav ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
    }
    
    nav ul li {
      display: inline-block;
    }
    
    nav ul li a {
      color: #fff;
      display: block;
      padding: 10px 20px;
      text-decoration: none;
      transition: background-color 0.3s;
    }
    
    nav ul li a:hover {
      background-color: #1f1f1f;
      border-radius: 5px;
    }

    .active{
        color: rgb(25, 151, 0);
    }

main {
  margin-top: 30px;
}

section.dashboard {
  margin-bottom: 30px;
}

section h2 {
  font-size: 20px;
  margin-bottom: 10px;
  color: #107c10;
}

footer {
  text-align: center;
  padding: 10px 0;
  color: #ccc;
}

/* Estilos do botão "Novo Caixa" */
.new-cash-btn {
  display: inline-block;
  padding: 10px 20px;
  background-color: #107c10;
  color: #fff;
  border: none;
  border-radius: 5px;
  font-size: 16px;
  text-decoration: none;
  margin-top: 20px;
  transition: 0.3s;
}

.new-cash-btn:hover {
  background-color: #005306;
}

/* Estilo para o gráfico de vendas */
.graph {
  width: 100%;
  height: 300px;
  background-color: #2c2c2c;
  border-radius: 10px;
}

/* Estilos para métricas de vendas */
.metrics {
  display: flex;
  justify-content: space-between;
  padding-top:10px;
}

.metric {
  background-color: #2c2c2c;
  padding: 10px;
  border-radius: 5px;
  flex: 1;
  margin-right: 10px;
}

.metric:last-child {
  margin-right: 0;
}

/* Estilos para o desempenho do servidor */
.server-info {
  display: flex;
  justify-content: space-between;
  padding-top:10px;
}

.server-status {
  background-color: #2c2c2c;
  padding: 10px;
  border-radius: 5px;
  flex: 1;
  margin-right: 10px;
}

.status-online {
  color: #107c10;
}

.server-usage {
  background-color: #2c2c2c;
  padding: 10px;
  border-radius: 5px;
  flex: 1;
}

/* Estilos para o registro de eventos do servidor */
.server-log {
  background-color: #2c2c2c;
  margin-top: 10px;
  border-radius: 5px;
}

.server-log p {
  margin: 0;
  padding: 5px 0;
  border-bottom: 1px solid #3a3a3a;
}

/* Estilos do botão de volta */
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
  <header>
    <img class="logo" src="img/excelllogo.png" alt="PlayStation Logo">
  </header>
  
  <nav>
    <ul>
      <li><a href="base.php">Início</a></li>
      <li><a href="login.php">Comunidade</a></li>
      <li><a href="acessórios.php">Acessórios</a></li>
      <li><a href="financeiro.php" class="active">Financeiro</a></li>
      <li><a href="kangu.php">Kangu</a></li>
      <li><a href="#">Suporte</a></li>
    </ul>
  </nav>
    <main>
      <section class="dashboard sales-dashboard">
        <h2>Métricas de Caixa</h2>
        <div class="graph">
          <!-- Gráfico de vendas aqui (pode ser implementado com bibliotecas de gráficos como Chart.js) -->
        </div>
        <div class="metrics">
          <div class="metric">
            <span>Caixa Total</span>
            <span>$</span>
          </div>
          <div class="metric">
            <span>Caixa do Mês</span>
            <span>$</span>
          </div>
          <div class="metric">
            <span>Caixa Diário</span>
            <span>$</span>
          </div>
        </div>
      </section>
      <section class="dashboard server-dashboard">
        <h2>Desempenho do Servidor</h2>
        <div class="server-info">
          <div class="server-status">
            <span>Status</span>
            <span class="status-online">Online</span>
          </div>
          <div class="server-usage">
            <span>Uso de CPU</span>
            <span>70%</span>
          </div>
        </div>
        <div class="server-log">
          <p>Evento 1</p>
          <p>Evento 2</p>
          <p>Evento 3</p>
          <!-- Registro de eventos do servidor aqui -->
        </div>
      </section>
      <a href="#" class="new-cash-btn">Novo Caixa</a>
    </main>
    <footer>
      <p>&copy; 2023 EXCELL. Todos os direitos reservados.</p>
    </footer>
  </div>
</body>
</html>
