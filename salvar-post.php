<?php
session_start();
include_once('config.php');

// Verifica se usuário está logado
if(!isset($_SESSION['user_id'])){
    header("Location: login.php");
    exit;
}

if(isset($_POST['submit'])){
    $titulo = $_POST['titulo'];
    $descricao = $_POST['descricao'];
    $user_id = $_SESSION['user_id']; // pega o id do usuário logado

    $sql = "INSERT INTO posts (user_id, titulo, descricao) VALUES (?, ?, ?)";
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("iss", $user_id, $titulo, $descricao);

    if($stmt->execute()){
        header("Location: sistema.php"); // redireciona para o feed
    } else {
        echo "Erro ao publicar: " . $conexao->error;
    }
}
?>
