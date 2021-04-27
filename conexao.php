<?php

//Criar conexão com o banco cadastro_user tabela tb_usuarios.

$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "cadastro_user";

$conexao = mysqli_connect($servidor, $usuario, $senha, $banco) or die("Falha na Conexão!". mysqli_connect_error());

?>