<?php
    
if(isset($_GET['nome']) && $_GET['nome'] != ''){
    $cadastro = [];

    $cadastro['nome'] = $_GET['nome'];

    if(isset($_GET['senha'])){
        $cadastro['senha'] = $_GET['senha'];
    }else{
        $cadastro['senha'] = '';
    }

    if(isset($_GET['administrador'])){
        $cadastro['administrador'] = $_GET['administrador'];
    }else{
        $cadastro['administrador'] = '';
    }
    
}

include "conexao.php";

//INSERINDO DADOS NO BANCO DE DADOS
if(isset($cadastro)){
    $sqlInserir = "INSERT INTO tb_usuarios(usuario, senha, administrador
    )VALUES(
        '{$cadastro['nome']}',
        '{$cadastro['senha']}',
        '{$cadastro['administrador']}'
        
    );";

    //precisa de dois parâmetros conexão e inserção no banco
    mysqli_query($conexao, $sqlInserir);
     
}
 
include "index.php";

?>
    



