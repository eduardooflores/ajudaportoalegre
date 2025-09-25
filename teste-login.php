<?php
session_start();
      //print_r($_REQUEST);
      if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']))
      {
            // Acessa
            include_once('config.php');
            $email = $_POST['email'];
            $senha = $_POST['senha'];

            $sql = "SELECT * FROM usuarios WHERE email = '$email' and senha  = '$senha'";

            $result = $conexao->query($sql);

            if(mysqli_num_rows($result) < 1)
            {
                  unset($_SESSION['email']);
                  unset($_SESSION['senha']);
                  header('Location: tela-login.php');
            }
            else
            {     
                  $row = $result->fetch_assoc();
                  $_SESSION['email'] = $email;
                  $_SESSION['senha'] = $senha;
                  $_SESSION['user_id'] = $row['id'];
                  header('Location: sistema.php');
            }
      }
      else
      {
            // Nao acessa
            header('Location: tela-login.php');
      }

?>