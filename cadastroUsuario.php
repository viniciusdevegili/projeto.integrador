<?php
$pdo = new PDO('mysql:host=localhost;dbname=bd', 'root', '');

if (isset($_POST['acao'])) {

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    if (isset($_POST['cbkadministrador'])) {
        $administrador = true;
    } else {
        $administrador = false;
    }
    if (isset($_POST['cbkativo'])) {
        $ativo = true;
    } else {
        $ativo = false;
    }
    $sql = $pdo->prepare("INSERT INTO login (codigo, nome, email, senha)
                            values (null,?,?,?);
                        ");
    if ($sql->execute(array($nome, $email, $senha))) {
        echo 'Cadastrado com sucesso';
    } else {
        echo 'erro ao cadastrar';
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<h<!DOCTYPE html>
<html lang="pt-br">
 
<head>
  <link rel="stylesheet" type="text/CSS" href="estilos.CSS">
  <!-- Meta tags Obrigatórias -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <meta charset="utf-8">
  <style>
 
    body {
     background-image: url(imagens/goinfo.png)
    }
 
    #cadastro {
      width: 25%;
      height: 260pt;
      color: rgb(255, 255, 255);
      background-color: #8c52ff;
      padding: 12px;
      border: 60px;
      border-radius: 80px;
    }
 
    #check {
      color: rgb(255, 255, 255);
    }
  </style>
</head>
 
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-none">
    <a class="navbar-brand" href="#">
      <h2> GOinfo</h2>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
 
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
      </ul>
    </div>
  </nav>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <center>
  </center>
    <div id="cadastro" class="mx-auto">
      <div class="container mx-auto pt-10 px-10">
        <div class="text-lg text-center font-bold mb-4">
          
        
        <form action="" method="POST">
        <div class="form-group">
              <label for="exampleInputNome1">
                <h4>Nome</h4>
              </label>
              <input type="text" name="nome" class="form-control" id="exampleInputnome" aria-describedby="emailHelp" required>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">
                <h4>E-mail</h4>
              </label>
              <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">
                <h4>Senha</h4>
              </label>
              <input type="password" name="senha" class="form-control" id="password" name="senha" required>
            </div>
            <br>
            <br>
            <br>
            <button style="background-color: #8c52ff; color: white; border-color: #8c52ff; width: 100; height: 40; margin: 10px" type="submit" name="acao" value="Cadastrar">Cadastrar</button>
            <button style="background-color: black; color: white; width: 100; height: 40" type="reset" >Cancelar</button>
            <div> 
           
            <a href="login.php" class="link-light">Já tem cadastro? Fazer login</a>
            </div>
          </form>
        </div>
      </div>
    </div>
    <br>


 
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
   
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
 
</html>

</html>