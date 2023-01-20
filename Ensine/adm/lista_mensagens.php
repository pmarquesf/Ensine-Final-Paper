<?php session_start(); 

  if($_SESSION['login'] != TRUE){
    echo "<script>window.location='login.php'</script>";
  }

?>

<!doctype html>

<html lang="en">
  <head>

          <!-- Required meta tags -->
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

          <!-- Bootstrap CSS -->
          <link rel="stylesheet" href="../css/bootstrap.min.css">
          <link rel="stylesheet" href="../css/style.css" >
          <title>Mensagens</title>
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
            <li>       
                <a href="lista_adm.php">&nbsp;&nbsp;&nbsp;&nbsp;
                  <img src="../images/icons/default_icon.png" class="icons">
                    &nbsp;&nbsp;ADMINISTRADORES</a>
            </li>
            <li class="active">               
                <a href="lista_mensagens.php">&nbsp;&nbsp;&nbsp;&nbsp;
                  <img src="../images/icons/default_icon.png" class="icons">
                    &nbsp;&nbsp;MENSAGENS</a>
            </li>          
        </ul>
    </nav>
</div> 

<div class="titulo"><h1>Mensagens</h1></div>  
    <div class='container leads'>
      <header class="row">
      </header>


    <div class="row">
      <div class="col-md-12">
          <?php
            require("conexao.php");
            $sql = "SELECT * FROM mensagens ORDER BY nome_bd";
            $res = mysqli_query($con, $sql);
            echo "<table class='table'>
              <thead>
                <tr>
                  <th scope='col'>Nome</th>
                  <th scope='col'>E-mail</th>
                  <th scope='col'>Assunto</th>      
                  <th scope='col'>Mensagem</th>         
                </tr>
              </thead>
            <tbody>";
            while($dados = mysqli_fetch_assoc($res)){
              echo "<tr>   
                      <td>".$dados['nome_bd']."</td>
                      <td>".$dados['email_bd']."</td>
                      <td>".$dados['assunto_bd']."</td>
                      <td><a href='ver_mensagens.php?id=".$dados['id_bd']."'>Ver detalhes</a></td>
                    </tr>";
            }
            echo "</tbody></table>";
          ?>


      </div>
    </div>
  </div>     

    <script src="../js/jquery-slim.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  </body>
</html>