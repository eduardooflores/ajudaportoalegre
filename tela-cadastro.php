<?php

      if(isset($_POST['submit']))
      {
            //print_r($_POST['nome']);
            //print_r('<br>');
            //print_r($_POST['email']);
            //print_r('<br>');
            //print_r($_POST['telefone']);
            //print_r('<br>');
            //print_r($_POST['genero']);

            include_once('config.php');

            $nome = $_POST['nome'];
            $senha = $_POST['senha'];
            $email = $_POST['email'];
            $telefone = $_POST['telefone'];
            $sexo = $_POST['genero'];

            $result = mysqli_query($conexao, "INSERT INTO usuarios(nome, senha, email, telefone, sexo)
            VALUES ('$nome', '$senha', '$email', '$telefone', '$sexo')");
      
            header('Location: tela-login.php');
      }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Cadastro</title>
      <style>
            body{
                  font-family: Arial, Helvetica, sans-serif;
            }
            .box{
                  color: white;
                  position: absolute;
                  top: 50%;
                  left: 50%;
                  transform: translate(-50%, -50%);
                  background-color: rgba(0, 0, 0, 0.8);
                  padding: 15px;
                  border-radius: 15px;
                  width: 20%;
            }

            fieldset{border: 3px, solid white}

            legend{
                  color: black;
                  font-weight: bold;
                  border: 1px solid white;
                  padding: 10px;
                  text-align: center;
                  background-color: white;
                  border-radius: 8px;
            }

            .inputBox{
                  position: relative;
            }

            .inputUser{
                  background: none;
                  border: none;
                  border-bottom: 1px solid white;
                  outline: none;
                  color: white;
                  font-size: 15px;
                  width: 100%;
                  letter-spacing: 2px;
            }

            .labelInput{
                  position: absolute;
                  top: 0px;
                  left: 0px;
                  pointer-events: none;
                  transition: .5s;
            }

            .inputUser:focus ~ .labelInput,
            .inputUser:valid ~ .labelInput{
                  top: -20px;
                  font-size: 12px;
                  color: #ffb700;
            }

            textarea{
                  resize: none;
                  font-size: 15px;
            }

            #dataNascimento{
                  border: none;
                  padding: 8px;
                  border-radius: 10px;
                  font-size: 15px;
            }

            #submit{
                  background-color: #CCA43B; 
                  width: 100%;
                  border: none; 
                  padding: 15px;
                  color: black;
                  font-size: 15px;
                  cursor: pointer;
                  border-radius: 10px;
            }

            #submit:hover{
                  background-color: #ffb700;
            }

            .voltar {
                  font-size: 15px;
                  box-shadow: 1px 1px 15px 1px #3d485265;
                  background-color: rgba(0, 0, 0, 0.8);
                  padding: 15px;
                  border-radius: 15px;
                  color: #CCA43B;
                  text-decoration: none;
                  position: absolute;
                  top: 20px;
                  right: 20px;
            }
      </style>
      </style>
</head>
<body>
      <a href="home.php" class="voltar">Voltar</a>
      <div class="box"> 
            <form action="tela-cadastro.php" method="POST">
                  <fieldset>
                        <legend>Cadastro</legend>
                        <br>
                        <div class="inputBox">
                              <input type="text" name="nome" id="nome" class="inputUser" required>
                              <label for="nome" class="labelInput">Nome completo</label>
                        </div>
                        <br><br>
                        <div class="inputBox">
                              <input type="password" name="senha" id="senha" class="inputUser" required>
                              <label for="senha" class="labelInput">Senha</label>
                        </div>
                        <br><br>
                        <div class="inputBox">
                              <input type="text" name="email" id="email" class="inputUser" required>
                              <label for="nome" class="labelInput">Email</label>
                        </div>
                        <br><br>
                        <div class="inputBox">
                              <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                              <label for="telefone" class="labelInput">Telefone</label>
                        </div>
                        <br>
                        <p>Gênero:</p>
                        <input type="radio" id="masculino" name="genero" value="masculino" required>
                        <label for="masculino">Masculino</label><br>
                        <input type="radio" id="feminino" name="genero" value="feminino" required>
                        <label for="feminino">Feminino</label><br>
                        <input type="radio" id="outro" name="genero" value="outro" required>
                        <label for="outro">Outro</label>
                        <br><br>
                        <button type="submit" name="submit" id="submit">Cadastrar</button>
                  </fieldset>
            </form>
      </div>
</body>
</html>