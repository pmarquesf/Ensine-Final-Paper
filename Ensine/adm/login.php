<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="stylesheet" href="../css/bootstrap.min.css" >
    <link rel="stylesheet" href="../css/style.css" >

    <title>Login - Only Admins</title>
  </head>
  
<body style="background-image:url(../images/hero1.jpg)">
  
  <div class="container-login">
    <div class="box-login">
      <p>Realize o Login</p>
       <form id='formlogin' method='post' action='verificar.php'>
          <div class="form-group">
            <label for="usuario">Identificador: </label>
            <input type='text' class='form-control' name='usuario' id='usuario' placeholder = 'Digite seu usuário'>     
          </div>
          <div class="form-group">
            <label for='senha'>Senha: </label>
            <input type='password' class='form-control' name='senha' id='senha' placeholder = 'Digite sua senha'>
          </div>
            <br><input type='submit' value='Acessar' class='btn btn-primary btn-envio'>
        </form>
    </div>
  </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../js/jquery-slim.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  </body>
</html>