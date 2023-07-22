<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comunidade Xbox One</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #0f0f0f;
    color: #fff;
    margin: 0;
    padding: 0;
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

    .dashboard-section {
      background-color: #0f0f0f;
    }
    
    .dashboard {
      display: flex;
      justify-content: center;
      alin-itens:row;
      flex-wrap: wrap;
    }
    
    .dashboard-item {
      width: 280px;
      height: 180px;
      background-color: #141414;
      margin: 10px;
      display: flex;
      justify-content: center;
      align-items: center;
      cursor: pointer;
      transition: transform 0.3s;
    }
    
    .dashboard-item:hover {
      transform: scale(1.05);
    }
    
    .dashboard-item img {
      max-width: 100%;
      max-height: 100%;
    }

main {
    padding: 20px;
}

section {
    margin-bottom: 20px;
}

section h2 {
    border-bottom: 2px solid #107c10;
    padding-bottom: 5px;
}

footer {
    background-color: #1b1b1b;
    padding: 10px;
    text-align: center;
    position: fixed;
    bottom: 0;
    left: 0;
    width: 100%;
}

footer p {
    margin: 0;
    color: #fff;
}

    </style>
</head>
<body>
<header>
    <img class="logo" src="img/excelllogo.png" alt="PlayStation Logo">
  </header>
  
  <nav>
    <ul>
      <li><a href="base.php">Início</a></li>
      <li><a href="comunidade.php"  class="active">Comunidade</a></li>
      <li><a href="acessórios.php">Acessórios</a></li>
      <li><a href="financeiro.php">Financeiro</a></li>
      <li><a href="kangu.php">Kangu</a></li>
      <li><a href="#">Suporte</a></li>
    </ul>
  </nav>
 

  <div class="dashboard">
      <div class="dashboard-item" data-title="destaque1">
        <img src="img/thelast.jpg" alt="desdaque">
      </div>

    <main>
        
        <section class="news">
            <h2>Últimas Notícias</h2>
            <!-- Seus conteúdos de notícias aqui -->
        </section>
        <section class="events">
            <h2>Próximos Eventos</h2>
            <!-- Seus eventos aqui -->
        </section>
        <section class="forum">
            <h2>Fórum de Discussão</h2>
            <!-- Seu fórum aqui -->
            
        </section>
        
    </main>

    <section class="dashboard-section">

    
    
    
      
  </section>
    <footer>
        <p>&copy; 2023 Comunidade Xbox One. Todos os direitos reservados.</p>
    </footer>
</body>
</html>
