<?php
session_start();
include_once('config.php'); // 🔹 precisa incluir a conexão aqui!

if((!isset($_SESSION['email']) == true) and (!isset ($_SESSION['senha']) == true))
{     
      unset($_SESSION['email']);
      unset($_SESSION['senha']);
      header('Location: tela-login.php');
      exit;
}
else
{
      $logado = $_SESSION['email'];
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" crossorigin="anonymous">
      <title>Página inicial</title>
      <style>
            main > form {
                  text-align: center;
            }

            .d-flex {
                  position: absolute;
                  top: 20px;
                  right: 20px;
            }
            .post {
                  border: 1px solid #ccc;
                  padding: 15px;
                  margin: 15px 0;
                  border-radius: 8px;
                  background: #f9f9f9;
            }
      </style>
</head>
<body>
      <div class="d-flex">
            <a href="sair.php" class="btn btn-danger me-5">SAIR</a>
      </div>
      <h1>SISTEMA ACESSADO</h1>
      
      <main>
            <!-- Formulário para criar post -->
            <form action="salvar-post.php" method="POST">
                  <label for="titulo">Título:</label><br>
                  <input type="text" id="titulo" name="titulo" required><br><br>
                  
                  <label for="descricao">Descrição:</label><br>
                  <textarea id="descricao" name="descricao" rows="5" required></textarea><br><br>
                  
                  <button type="submit" name="submit">Publicar</button>
            </form>

            <hr>

            <!-- Exibir os posts -->
            <h2>Feed de Posts</h2>
            <?php
            // 🔹 Consulta os posts do banco
            $sql = "SELECT posts.*, usuarios.nome 
                    FROM posts 
                    JOIN usuarios ON posts.user_id = usuarios.id 
                    ORDER BY posts.criado_em DESC";

            $result = $conexao->query($sql);

            if ($result->num_rows > 0) {
                  while($row = $result->fetch_assoc()) {
                        echo "<div class='post'>";
                        echo "<h3>" . htmlspecialchars($row['titulo']) . "</h3>";
                        echo "<p>" . nl2br(htmlspecialchars($row['descricao'])) . "</p>";
                        echo "<small>Publicado por <b>" . htmlspecialchars($row['nome']) . "</b> em " . $row['criado_em'] . "</small>";
                        echo "</div>";
                  }
            } else {
                  echo "<p>Nenhum post encontrado.</p>";
            }
            ?>
      </main>     
</body>
</html>
