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

            <li class="active">
                 <a href="pre_questionario.php">&nbsp;&nbsp;&nbsp;&nbsp;
                  <img src="images/icons/default_icon.png" class="icons">
                    &nbsp;&nbsp;QUESTIONÁRIO</a>

            </li>

         <div class="divisao"></div>

            <li>
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

<div class="titulo"> Avaliação</div>

<div class="questionario">
        <div class="quiz-container">
            <div id="quiz"></div>

                <div class="btn-quest">
                    <div class="btn-quest-anterior">
                        <button id="previous" class="anterior">Questão anterior</button></div>

                <div class="btn-quest-anterior">
                    <button id="home" class="anterior">Finalizar</button></div>

                        <div class="resultado-quest"> 
                            <div id="total" class="total-questoes"></div>&nbsp;
                            <div id="results" class="total-questoes"></div>
                        </div>

                <div class="btn-quest-proximo">
                    <button id="next" class="proxima">Próxima questão</button></div>

                <div class="btn-quest-finalizar">       
                    <a class="finalizar" id="submit"><button>Resultado</button></a></div>

              </div>
            </div>
          </div>           

    <script src="js/questionario.js" type="text/javascript"></script>

  </body>
</html>