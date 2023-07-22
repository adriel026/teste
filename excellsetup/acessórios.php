
<?php
include_once('bd/config.php');

// Obter o termo de pesquisa enviado pelo usuário
$termoPesquisa = isset($_GET['pesquisa']) ? $_GET['pesquisa'] : '';

// Modificar a consulta SQL para incluir a cláusula WHERE com o termo de pesquisa
$sql = "SELECT * FROM pelicula
        WHERE marca LIKE '%$termoPesquisa%' 
        OR modelo LIKE '%$termoPesquisa%' 
        OR compatibilidade LIKE '%$termoPesquisa%' 
        ORDER BY id DESC";

$result = $conexao->query($sql);
$totalRows = mysqli_num_rows($result);

// Armazenar os registros correspondentes ao termo de pesquisa em um array
$registrosPesquisados = [];
while ($user_data = mysqli_fetch_assoc($result)) {
  $registrosPesquisados[] = $user_data;
}

// Definir o número máximo de registros por tabela
$registrosPorTabela = 10;
$numTabelas = ceil($totalRows / $registrosPorTabela); // Calcular o número total de tabelas

// Verificar se há uma tabela específica selecionada
$tabelaSelecionada = isset($_GET['tabela']) ? intval($_GET['tabela']) : 1;
if ($tabelaSelecionada < 1 || $tabelaSelecionada > $numTabelas) {
  $tabelaSelecionada = 1; // Definir a tabela padrão como a primeira
}

// Calcular o intervalo de registros para exibição na tabela atual
$inicio = ($tabelaSelecionada - 1) * $registrosPorTabela;
$fim = $inicio + $registrosPorTabela - 1;
if ($fim >= $totalRows) {
  $fim = $totalRows - 1;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>


    body {
      font-family: Arial, sans-serif;
      background-color: #0f0f0f;
      color: #fff;
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

    .dashboard-section {
      background-color: #0f0f0f;
    }
    
    .dashboard-section h2 {
      font-size: 36px;
      margin-bottom: 20px;
    }
    
    .dashboard {
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
    }
    
    .dashboard-item {
      width: 300px;
      height: 200px;
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

    .active{
        color: rgb(25, 151, 0);
    }
    
   
    .entries {
      padding: 20px;
      max-width: 800px;
      margin: 0 auto;
    }
    
    .entries h2 {
      font-size: 24px;
      margin-bottom: 20px;
      text-align: center;
    }
    
    .table-responsive {
      overflow-x: auto;
    }
    
    .table {
      width: 100%;
      border-collapse: collapse;
    }
    
    .table th,
    .table td {
      padding: 10px;
      border-bottom: 1px solid #ccc;
      text-align: left;
    }
    
    .table thead th {
      background-color: #141414;
      color: #fff;
    }
    
    .table tbody tr:nth-child(even) {
      background-color: #1c1c1c;
    }
    
    .btn {
      display: inline-block;
      padding: 8px 16px;
      font-size: 14px;
      text-align: center;
      text-decoration: none;
      border-radius: 4px;
      transition: background-color 0.3s ease;
    }
    
    .btn-dark {
      background-color: #003791;
      color: #fff;
      border: none;
    }
    
    .btn-dark:hover {
      background-color: #002366;
    }
    
    .btn-dark:focus {
      outline: none;
      box-shadow: 0 0 0 2px #003791;
    }

    .search-bar {
      margin-bottom: 20px;
    }
    
    .search-bar input[type="text"] {
      width: 100%;
      padding: 8px;
      font-size: 16px;
      border-radius: 4px;
      border: none;
    }

    .product-count {
      margin-bottom: 10px;
      text-align: right;
      color: #ccc;
    }

    .pagination {
      display: flex;
      justify-content: center;
      margin-bottom: 20px;
    }

    .pagination .arrow {
      display: inline-block;
      padding: 6px 12px;
      font-size: 16px;
      text-align: center;
      cursor: pointer;
      background-color: #003791;
      color: #fff;
      border: none;
      border-radius: 4px;
      margin: 0 5px;
      transition: background-color 0.3s ease;
    }

    .pagination .arrow:hover {
      background-color: #002366;
    }

    .pagination .arrow:first-child {
      margin-left: 0;
    }

    .pagination .arrow:last-child {
      margin-right: 0;
    }

    .new-entry-btn {
      display: block;
      text-align: center;
      margin-top: 20px;
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
      <li><a href="comunidade.php">Comunidade</a></li>
      <li><a href="acessórios.php" class="active">Acessórios</a></li>
      <li><a href="financeiro.php">Financeiro</a></li>
      <li><a href="kangu.php">Kangu</a></li>
      <li><a href="#">Suporte</a></li>
    </ul>
  </nav>

  <section class="dashboard-section">
    <h2></h2>
    <div class="dashboard">
      <div class="dashboard-item" data-title="The Last of Us Part II">
        <img src="img/mouse.jpg" alt="The Last of Us Part II">
      </div>
      <div class="dashboard-item" data-title="God of War">
        <img src="img/pelicula.jpg" alt="God of War">
      </div>
      <div class="dashboard-item" data-title="Spider-Man">
        <img src="img/fone.jpg" alt="Spider-Man">
      </div>


  <section class="entries">
    <!-- Seu código HTML existente aqui -->
    <div class="table-responsive">
    <div class="search-bar">
        <input type="text" id="searchInput" placeholder="Pesquisar..." oninput="searchTable()">
      </div>

      <a href="cadpelicula.php" class="new-entry-btn btn btn-dark">Novo Cadastro</a>
      <table class="table text-white table-bg table-sm" id="tabela-lancamentos">
        <thead class="thead-light">
          <tr>
            <th scope="col">Marca</th>
            <th scope="col">Modelo</th>
            <th scope="col">Compatibilidade</th>
          </tr>
        </thead>
        <tbody>
          <?php
          // Exibir os registros correspondentes ao termo de pesquisa em uma única tabela
          foreach ($registrosPesquisados as $registro) {
            echo "<tr>";
            echo "<td>".$registro['marca']."</td>";
            echo "<td>".$registro['modelo']."</td>";
            echo "<td>".$registro['compatibilidade']."</td>";
            echo "<td>
              <a class='btn btn-dark' href='entrega.php?id=".$registro['id']."' id='new-entry-btn'>Entregue</a>
            </td>";
            echo "</tr>";
          }

          // Se não houver registros correspondentes, exibir uma mensagem
          if (empty($registrosPesquisados)) {
            echo "<tr><td colspan='4'>Nenhum resultado encontrado.</td></tr>";
          }
          ?>
        </tbody>
      </table>
    </div>
      <div class="pagination">
        <?php if ($numTabelas > 1 && $tabelaSelecionada > 1) : ?>
          <button class="arrow" onclick="navigateTables(<?php echo $tabelaSelecionada - 1; ?>, <?php echo $numTabelas; ?>, '<?php echo $_SERVER['PHP_SELF']; ?>')">←</button>
        <?php endif; ?>
        <?php if ($numTabelas > 1 && $tabelaSelecionada < $numTabelas) : ?>
          <button class="arrow" onclick="navigateTables(<?php echo $tabelaSelecionada + 1; ?>, <?php echo $numTabelas; ?>, '<?php echo $_SERVER['PHP_SELF']; ?>')">→</button>
        <?php endif; ?>
      </div>
      <a href="cadpelicula.php.php" class="new-entry-btn btn btn-dark">Novo Cadastro</a>
    </div>
  </section>

    <script>
    function searchTable() {
      var input = document.getElementById("searchInput");
      var filter = input.value.toUpperCase();
      var table = document.getElementById("tabela-lancamentos");
      var rows = table.getElementsByTagName("tr");

      for (var i = 0; i < rows.length; i++) {
        var cells = rows[i].getElementsByTagName("td");
        var found = false;

        for (var j = 0; j < cells.length; j++) {
          var cell = cells[j];
          if (cell) {
            var text = cell.textContent || cell.innerText;
            if (text.toUpperCase().indexOf(filter) > -1) {
              found = true;
              break;
            }
          }
        }

        if (found) {
          rows[i].style.display = "";
        } else {
          rows[i].style.display = "none";
        }
      }
    }

    function navigateTables(table, numTables, currentPage) {
      if (table >= 1 && table <= numTables) {
        window.location.href = currentPage + "?tabela=" + table;
      }
    }
  </script>
    
  </div>
</body>
</html>
