<!DOCTYPE html>
<html lang="pt-BR">
<title>Fale Conosco - Ensine</title>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css" >

<style>

</style>

<body>

<!-- Navbar -->
<div class="wrapper">
    <nav id="sidebar">
        <div class="sidebar-header">
            <img src="images/logo.png">
        </div>

        <div class="boxassine">
          <br><a href="assine.php" class="assine"> Assine Agora </a><br>
        </div>

        <br>

        <ul class="list-unstyled components">
            <li>
                <a href="index.html">&nbsp;&nbsp;&nbsp;
                  <img src="images/icons/home_icon.png" class="icons">
                    &nbsp;&nbsp;HOME</a>
            </li>

          <div class="divisao"></div>

            <li>             
                <a href="pages/causas.php">&nbsp;&nbsp;&nbsp;&nbsp;
                  <img src="images/icons/conteudo_icon.png" class="icons">
                    &nbsp;&nbsp;ORIGEM</a>
            </li>
            <li>       
                <a href="pages/fases.php">&nbsp;&nbsp;&nbsp;&nbsp;
                  <img src="images/icons/conteudo_icon.png" class="icons">
                    &nbsp;&nbsp;AS TRÊS FASES</a>
            </li>
            <li>               
                <a href="pages/consequencias.php">&nbsp;&nbsp;&nbsp;&nbsp;
                  <img src="images/icons/conteudo_icon.png" class="icons">
                    &nbsp;&nbsp;CONSEQUÊNCIAS</a>
            </li>          

         <div class="divisao"></div>

            <li>
                 <a href="pre_questionario.php">&nbsp;&nbsp;&nbsp;&nbsp;
                  <img src="images/icons/default_icon.png" class="icons">
                    &nbsp;&nbsp;QUESTIONÁRIO</a>

            </li>

         <div class="divisao"></div>

            <li class="active">
                <a href="contato.php">&nbsp;&nbsp;&nbsp;&nbsp;
                  <img src="images/icons/contato_icon.png" class="icons">
                    &nbsp;&nbsp;FALE CONOSCO</a>
            </li>   
        </ul>

        <div class="redes">
              <button class="instagram"><a href="https://www.instagram.com" target="_blank">
                   <img src="images/icons/instagram_icon.png" class="icons_redes"></a></button>

              <button class="facebook"><a href="https://www.facebook.com" target="_blank">
                    <img src="images/icons/facebook_icon.png" class="icons_redes"></a></button>

              <button class="twitter"><a href="https://www.twitter.com/" target="_blank">
                    <img src="images/icons/twitter_icon.png" class="icons_redes"></a></button>
          </div>
          
          
    </nav>
</div>

<!-- Page content -->
<div class="main">

<!-- Formulario -->
  <div class="titulo"> Fale Conosco</div>
    <div class="boxcontato">
        <p> Contato </p>
            <div class="form-group">
                <a>Preencha o formulário abaixo e nos dê um feedback sobre a sua participação no site. Além de nos ajudar muito, ainda permite-nos aperfeiçoar a plataforma com base nas opiniões dos usuários.</a>
            </div>

            <form action="salvarcontato.php" method="post">
              <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" name="nome" class="form-control" placeholder="Digite seu nome">
              </div>

              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" placeholder="Digite seu Email">
              </div>

              <div class="form-group">
                  <label for="mensagem">Assunto da Mensagem</label>
                  <input type="text" name="assunto" class="form-control" placeholder="Digite o assunto da mensagem"></input> 
              </div>

              <div class="form-group">
                  <label for="mensagem">Mensagem</label>
                  <textarea type="text" name="mensagem" class="form-control" placeholder="Digite sua mensagem" style="height: 150px"></textarea> 
              </div>
              <br>   

              <div class="form-group">
                  <input type="submit" class="btn btn-primary btn-envio" value="Enviar" href="salvarcontato.php">
              </div>   
          </form>
    </div>
</div>

<script>
</script>

</body>
</html>
