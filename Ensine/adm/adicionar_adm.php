<?php session_start(); 

  if($_SESSION['login'] != TRUE){
    echo "<script>window.location='login.php'</script>";
  }

?>

<!Doctype html>

<html lang="en">
         <head>
            <!-- Required meta tags -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

            <!-- Bootstrap CSS -->
            <link rel="stylesheet" href="../css/bootstrap.min.css" >
            <link rel="stylesheet" href="../css/style.css" >
            <style> </style>

            <title>Progrida nos seus estudos!</title>
          </head>

<body>

<div class="wrapper">
    <nav id="sidebar">
       <div class="sidebar-header">
            <img src="../images/logo.png">
        </div>

        <div class="boxacessoadm">
                <a class="acessoadm"> Bem vindo, <?php echo $_SESSION['apelido']; ?> </a><br>
                <a class="btn btn-danger sair" href="sair.php"> Sair </a> 
                <a class="btn btn-warning logout" href="logout.php"> Logout </a><br>         
        </div>

        <div class="box-add-del-adm">
            <a class="btn btn-success add" href="adicionar_adm.php"> Adicionar Admin </a> 
            <a class="btn btn-danger del" href="ver_adm.php"> Excluir Admin </a><br>         
        </div>

        <br>

        <ul class="list-unstyled components">
            <li>
                <a href="index.php">&nbsp;&nbsp;&nbsp;
                  <img src="../images/icons/default_icon.png" class="icons">
                    &nbsp;&nbsp;LEADS</a>
            </li>
            <li  class="active">       
                <a href="lista_adm.php">&nbsp;&nbsp;&nbsp;&nbsp;
                  <img src="../images/icons/default_icon.png" class="icons">
                    &nbsp;&nbsp;ADMINISTRADORES</a>
            </li>
            <li>               
                <a href="lista_mensagens.php">&nbsp;&nbsp;&nbsp;&nbsp;
                  <img src="../images/icons/default_icon.png" class="icons">
                    &nbsp;&nbsp;MENSAGENS</a>
            </li>          
        </ul>
    </nav>
</div> 

   <div class="titulo"> Adicionar Administrador</div>
    <div class="box-add-adm">
        <p>  Administrador </p>
            <form action="salvar_adm.php" method="post">
               <div class="form-group">
                  <label for="nome">Apelido</label>
                  <input type="text" id='apelido' name="apelido" Required class="form-control" placeholder="Como deseja ser chamado?">
              </div>  
                                   
              <div class="form-group">
                  <label for="nome">Nome</label>
                  <input type="text" id= 'nome' name="nome" Required class="form-control" placeholder="Informe seu nome" >
              </div>

              <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" id='email' name="email" Required class="form-control" placeholder="Informe seu e-mail">
              </div>

              <div class="form-group">
                  <label for="senha">Senha</label>
                  <input type="password" id='senha' name="senha" Required class="form-control" placeholder="Digite a senha">
              </div> 

              <div class="form-group">
                  <label for="confirmasenha">Confirme a senha</label>
                  <input type="password" id='confirm' name="confirm" Required class="form-control" placeholder="Confirme a senha">
              </div> 

              <br>         

              <div class="form-group">
                  <input type="submit" class="btn btn-primary btn-envio" value="Registrar" href="salvar_adm.php">
              </div>  
          </form>
    </div>

</body>
</html>
