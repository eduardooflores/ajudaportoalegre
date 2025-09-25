<!DOCTYPE html>
<html lang="pt-br">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Tela de login</title>
      <style>
            body{
                  font-family: Arial, Helvetica, sans-serif;
            }

            .tela-login{
                        background-color: rgba(0, 0, 0, 0.8);
                        position: absolute;
                        top: 50%;
                        left: 50%;
                        transform: translate(-50%,-50%);
                        padding: 80px;
                        border-radius: 20px;
                        color: white;
            }

            h1{
                  text-align: center;
            }

            input{
                  padding: 15px;
                  border: none;
                  outline: none;
                  font-size: 15px;
                  width: 90%;
            }

            p{
                  padding: 0%;
            }

            a {
                  color: #CCA43B;
                  text-decoration: none;
            }

            .voltar{
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

            button{
                  background-color: #CCA43B;
                  border: none;
                  padding: 15px;
                  width: 100%;
                  border-radius: 10px;
                  font-size: 15px;
                  cursor: pointer;
            }

            button:hover{
                  background-color: #ffb700;
            }
      </style>
</head>
<body>
      <a href="home.php" class="voltar">Voltar</a>
      <div class="tela-login">
            <h1>LOGIN</h1>
            <p>Faça login para acessar sua conta!</p>
            <form action="teste-login.php" method="POST">
                  <input type="email" name="email" placeholder="Email">
                  <br> <br>
                  <input type="password" name="senha" placeholder="Senha">
                  <p>Não possuí conta? <a href="tela-cadastro.php">Cadastre-se</a></p>
                  <br> 
            <button type="submit" name="submit" value="Enviar">Entrar</button>
            </form>
      </div>
</body>
</html>