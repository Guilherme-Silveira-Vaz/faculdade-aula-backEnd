<?php

  $dbHost = 'Localhost';
  $username = 'root';
  $password = '';
  $dbName = 'cadastro-simplificado';

  $conexao = new mysqli($dbHost,$username,$password,$dbName);

  if($conexao->connect_errno)
  {
    echo "Erro na conexão";
  }
  else
  {
    echo "Conexão realizada com sucesso!";
  }

?>