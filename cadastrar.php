<?php

include_once('conexao.php')

$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];


$senhaCript = password_hash($senha, PASSWORD_DEFAULT);


$sql = "INSERT INTO usuario (nome, email, senha) VALUES ('$nome', '$email', '$senhaCript')";
if (mysqli_query($conexao, $sql)) {
    echo "Cadastro realizado!";
} else {
    echo "Erro: " . mysqli_error($conexao);
}

mysqli_close($conexao);

?>