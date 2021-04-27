<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <!-- Link Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Link CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="sidenav">
        <div class="login-main-text">
            <h2>Aplicação <br> Página de Login</h2>
            <p>Faça login ou registre-se aqui para acessar</p>
        </div>
    </div>
    <div class="main">
        <div class="col-md-6">
            <div class="login-form">
                <formulário>
                <form action="inserir.php" method="GET">
                    <div class="form-group">
                        <input type="text" name="nome" class="form-control" placeholder="username *">
                    </div>
                    <div class="form-group">
                        <input type="password" name="senha" class="form-control" maxlength="8" placeholder="password *">
                    </div>
                    <div class="form-group">
                    <input type="checkbox" name="administrador" value="sim" id="admin"> Administrador?
                    </div>
                    <button type="submit" class="btn btn-black">LOGIN</button>
                    <button type="submit" class="btn btn-secondary">Registre-se</button>
                </form>    
            </div>
            <table class="table">
                <thead>
                    <tr>    
                        <th>USUÁRIO</th>
                        <th>SENHA</th>
                        <th>ADMIN</th>
                        
                    </tr>
                </thead>
            <tbody>
                <?php 
                    $sqlBusca = "SELECT * FROM tb_usuarios";
                    $resultado = mysqli_query($conexao, $sqlBusca);
                    
                    $listaCadastro = [];

                    while($cadastro = mysqli_fetch_assoc($resultado)){
                        $listaCadastro[] = $cadastro;
                    }
                    foreach($listaCadastro as $cadastro): ?>
                        <tr>
                            <td> <?php echo $cadastro['usuario']; ?></td>
                            <td> <?php echo $cadastro['senha']; ?></td>
                            <td> <?php echo $cadastro['administrador']; ?></td>                           
                        </tr>    
                    <?php endforeach; ?> 
            </tbody>
           </table> 
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>