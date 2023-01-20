<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css" >
    <title>Site!</title>
  </head>


<body style="background-image: url(imagens/back.jpg);background-repeat: no-repeat;background-size: 100%;background-attachment: fixed;background-position: center">
  

<nav class="navbar navbar-dark bg-primary" style="background-image: linear-gradient(-210deg, lightblue, DeepSkyBlue) !important">
  <a class="navbar-brand" href="#">Menu</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="adm/listar.php">Listar</a>
    </div>
  </div>
</nav>


    <div class='container'>

        <header class="row">
          <div class="col-md-12">
            <div  style="margin-top: 40px;">
                 <h1>Registros </h1>
                 <br>
            </div>
          </div>
        </header>


    <div class='row'>
      <div class="col-md-12">
          <?php
            require("conexao.php");
            $sql = "SELECT * FROM leads ORDER BY nome_lead";
            $res = mysqli_query($con, $sql);
            echo "<table class='table'>
              <thead>
                <tr>
                  <th scope='col'>Nome</th>
                  <th scope='col'>E-mail</th>   
                  <th scope='col'>Detalhes</th>         
                </tr>
              </thead>
            <tbody>";
            while($dados = mysqli_fetch_assoc($res)){
              echo "<tr>   
                      <td>".$dados['nome_lead']."</td>
                      <td>".$dados['email_lead']."</td>
                      <td><a href='ver.php?id=".$dados['id_lead']."'>Ver detalhes</a></td>
               

                    </tr>";
            }
            echo "</tbody></table>";
          ?>
      </div>
    </div>

</div>     


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../js/jquery-slim.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  </body>
</html>