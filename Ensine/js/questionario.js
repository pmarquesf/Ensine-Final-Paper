(function() {
  
  const myQuestions = [
    {
      current: "Questão 1 - Espcex (Aman) 2012",
      question: "'A execução de Luis XVl, em janeiro de 1793, abalou a nobreza europeia. No interior da França, eclodiram revoltas (...). No exterior, formou-se a Primeira Coligação europeia (...). A França foi novamente invadida. (...) Teve inicio então, o Período do Terror, que se estenderia até julho de 1794.' (ARRUDA 8. PILEITI, 2007).<br><br> O Periodo do Terror, caracterizado pela radicalização do processo revolucionárIo, ocorreu durante a fase da (o)",
      answers: {
        a: "Monarquia Constitucional e era chefiado por jacobinos.",
        b: "Diretório e era dirigido por girondinos.",
        c: "Assembleia Nacional Constituinte e era orientado por girondinos.",
        d: "Convenção Nacional e era liderado por jacobinos.",
        e: "Assembleia Legislativa e era comandado por 'sans-culottes'.",
      },
      correctAnswer: "d"
    },
    {
      current: "Questão 2 - UFSJ 2004",
      question: "'A Revolução Francesa se situa (...) no coração mesmo da história do mundo contemporâneo, na encruzilhada das diversas correntes sociais e políticas que dividiram as nações e ainda dividem. Filha do entusiasmo, inflama os homens pela recordação das lutas pela liberdade e pela independência, bem como pelo seu sonho de igualdade fraternal – ou suscita o ódio de muitos. Filha das luzes, concentra os ataques do privilégio e da tradição, ou seduz a inteligência pelo seu imenso esforço no sentido de organizar a sociedade sobre fundamentos racionais'<br><br>São indicativos de realizações da Revolução Francesa:",
      answers: {
        a: "A abolição da propriedade privada, a igualdade social e a ditadura do proletariado.",
        b: "A conservação dos privilégios da nobreza e a monarquia absolutista de direito divino.",
        c: "A manutenção do absolutismo com elementos típicos da burguesia.",    
        d: "O retorno à vida comunal camponesa e aos valores tradicionais nas aldeias e vilas.",
        e: "O fim dos privilégios feudais, a igualdade dos direitos civis e o Estado liberal.",
      },
      correctAnswer: "e"
    },
    {
      current: "Questão 3 - FUVEST 2005",
      question: "A 'Declaração dos Direitos do Homem e do Cidadão', votada pela Assembleia Nacional Constituinte francesa, em 26 de agosto de 1789, visava:",
      answers: {
        a: "assinalar os princípios que, inspirados no Iluminismo, iriam fundar a nova constituição francesa.",
        b: "romper com a Declaração de Independência dos Estados Unidos, por esta não ter negado a escravidão.",
        c: "recuperar os ideais cristãos de liberdade e igualdade, surgidos na época medieval e esquecidos na moderna.  ",
        d: "estimular todos os povos a se revoltarem contra seus governos, para acabar com a desigualdade social.",
        e: "pôr em prática o princípio: a todos, segundo suas necessidades, a cada um, de acordo com sua capacidade.",
      },
      correctAnswer: "a"
    },
    {
      current: "Questão 4 - UFLA 2011",
      question: "Sobre o período da Revolução Francesa (1789-1799), denominado de Convenção Nacional (1792-1795) é correto afirmar, EXCETO:",
      answers: {
        a: "Ebulição política provocada pelo guilhotinamento de Luís XVI e Maria Antonieta.",
        b: "Acirramento político sob o “período do terror” (setembro de 1793 a julho de 1794), no qual milhares de pessoas foram executadas.",
        c: "Alternância no poder dos grupos, clubes e partidos da esquerda e da direita, que são encerrados com a implantação do Diretório.",
        d: "Marcado pelo fim das disputas político-partidárias entre os Girondinos, Jacobinos e Planície."
      },
      correctAnswer: "d"
    },
    {
      current: "Questão 5 - UNIMONTES 2009",
      question: "O caráter revolucionário dos episódios que tiveram lugar na França, a partir de julho de 1789, pode ser identificado no(a)<br><br>I - descontentamento dos camponeses pobres, manifestado nas revoltas que configuraram o Grande Medo.<br>II - recusa da nobreza em aceitar os votos por cabeça, insistindo na votação por Estado, mecanismo que resguardaria seus interesses.<br>III - transformação dos Estados Gerais em Assembléia Nacional Constituinte, processo liderado pelos segmentos jacobinos.<br>IV - tomada da Bastilha, símbolo do Antigo Regime absolutista, em 14 de julho, fato marcante na mobilização dos sans-cullottes.<br><br>Está(ão) CORRETA(S) a(s) afirmativa(s) ",
      answers: {
        a: "IV, apenas.",
        b: "I e III, apenas.",
        c: "II e IV, apenas.",
        d: "I, III e IV, apenas.",
      },
      correctAnswer: "d"
    },
    {
      current: "Questão 6 - UEMA 2009",
      question: "No contexto da Revolução Francesa, a fase da Convenção Nacional (1792-1795) foi controlada pelos montanheses (jacobinos) que, através do Comitê de Salvação Pública, tomaram as seguintes providências:",
      answers: {
        a: "concessão do direito de voto de acordo com a renda; garantia da propriedade privada e do direito de resistência à opressão.",
        b: "aprovação da Declaração dos Direitos do Homem e do Cidadão; confisco dos bens da Igreja e o estabelecimento da monarquia constitucional.",
        c: "concessão do direito de voto a todos os maiores de 21 anos; realização da reforma agrária e abolição da escravidão nas colônias.",
        d: "divisão da Assembleia Nacional Constituinte em deputados jacobinos, girondinos e da Planície e a criação do Diretório composto por cinco membros.",
        e: "mudança do sistema de votação – de estado por cabeça; aprovação da Constituição Civil do Clero e adoção de um novo calendário baseado nas estações do ano.",
      },
      correctAnswer: "c"
    },
    {
      current: "Questao 7 - UFU 2002",
      question: "Sobre a Revolução Francesa de 1789, é correto afirmar que",
      answers: {
        a: "os princípios da liberdade, da igualdade, da fraternidade e do direito à propriedade tornaram-se a espinha dorsal do movimento revolucionário, porque os diferentes segmentos sociais que fizeram a Revolução atribuíram as estes princípios os mesmos valores e graus de importância.",
        b: "no período de maior radicalização do movimento revolucionário, os jacobinos promulgaram a Declaração dos Direitos do Homem e do Cidadão, estabelecendo a igualdade de todos perante a lei, o direito à propriedade privada e o direito de resistência à opressão, o que deu à Revolução um caráter popular e democrático.",
        c: "considerada como a primeira revolução burguesa da história, esta consolidou o princípio político da liberdade, entendido como direito inalienável de homens e mulheres de escolherem seus representantes para o poder, por meio do voto universal, em eleições quadrienais.",
        d: "três anos após a queda da Bastilha, o movimento revolucionário radicalizou-se sob a liderança dos jacobinos que assumiram o poder com o apoio dos sans-culottes. O caráter popular e democrático deste período da Revolução expressou-se no direito de voto a todos os homens maiores de 21 anos, na liberdade de culto, na reforma agrária, no acesso da população pobre à educação.",
      },
      correctAnswer: "d"
    },
    {
      current: "Questão 8 - PUC-RJ 2004",
      question: "Quais das afirmativas abaixo apresentam, de modo correto, acontecimentos da Revolução Francesa nos quais os diversos grupos sociais e políticos implementaram ações que transformaram a sociedade da época?<br><br>I - Instalada a Assembleia Nacional (1789), os constituintes se apressaram em formular a Declaração dos Direitos do Homem e do Cidadão.<br>II - Grupos camponeses promoveram invasões e saques em propriedades rurais, influenciando a decisão da Assembleia Nacional de abolir os direitos feudais.<br>III - Durante a Convenção (1792-1794), houve a implantação da República e a adoção do sufrágio universal.<br>IV - O governo de Napoleão Bonaparte decretou o Código Civil, que incorporou na legislação francesa os princípios liberais burgueses.",
      answers: {
        a: "Se somente I, III e IV estão corretas.",
        b: "Se somente I, II e IV estão corretas.",
        c: "Se somente II, III e IV estão corretas.",
        d: "Se somente I e III estão corretas.",
        e: "Se todas as afirmativas estão corretas",
      },
      correctAnswer: "b"
    },
    {
      current: "Questão 9 - PUC-RJ 2006",
      question: "A data foi a noite do 14 de julho de 1789, em Paris, quando Luís XVI recebeu do duque de La Rochefoucauld-Liancourt a notícia da queda da Bastilha, da libertação de uns poucos prisioneiros e da defecção das tropas reais frente a um ataque popular. O famoso diálogo que se travou entre o rei e seu mensageiro é muito lacônico e revelador. O rei, segundo consta, exclamou: É uma revolta; e Liancourt corrigiu-o: Não, senhor, é uma revolução.<br>O caráter revolucionário dos episódios ocorridos na França, a partir de julho de 1789, pode ser identificado no(a):<br><br> I - descontentamento de camponeses pobres, manifestado nas revoltas que configuraram o Grande Medo.<br>II - invasão e depredação da Bastilha.<br>III - transformação da reunião dos Estados Gerais em uma Assembleia Constituinte.<br>IV - aumento das divergências entre o rei e o alto clero da Igreja Católica.",
      answers: {
        a: "Somente as afirmativas I e IV estão corretas.",
        b: "Somente as afirmativas I, II e III estão corretas.",
        c: "Somente as afirmativas II e IV estão corretas.",
        d: "Somente as afirmativas II e III estão corretas.",
        e: "Somente as afirmativas III e IV estão corretas.",
      },
      correctAnswer: "b"
    },
     {
      current: "Questão 10 - PUC-CAMPINAS 1995",
      question: "No contexto da Revolução Francesa, a organização do Governo Revolucionário significou uma forte centralização do poder: o Comitê de Salvação Pública, eleito pela Convenção, passou a ser o efetivo órgão do Governo... . Havia ainda o Comitê de Segurança Geral, que dirigia a polícia e a justiça, sendo que estava subordinado ao Tribunal Revolucionário que tinha competência para punir, até a morte todos os suspeitos de oposição ao regime. O conjunto de medidas de exceção adotadas pelo Governo revolucionário deu margem a que essa fase da Revolução viesse a ser conhecida como:",
      answers: {
        a: "o Período do Terror.",
        b: "os Massacres de Setembro.",    
        c: "o Grande Medo.",
        d: "O Período do Termidor.",
        e: "o Golpe do 18 de Brumário."
      },
      correctAnswer: "a"
    }
  ];

  function buildQuiz() {
    const output = [];

    myQuestions.forEach((currentQuestion, questionNumber) => {
      const answers = [];

      for (letter in currentQuestion.answers) {
        answers.push(
          `<label>
             <input type="radio" name="question${questionNumber}" value="${letter}">
              ${letter} :
              ${currentQuestion.answers[letter]}
           </label>`
        );
      }

      output.push(
        `<div class="slide">
          <div class="current">${currentQuestion.current}</div>
           <div class="question"> ${currentQuestion.question} </div>
           <div class="answers"> ${answers.join("")} </div>
         </div>`
      );
    });

    quizContainer.innerHTML = output.join("");
  }

  function showResults() {
    const answerContainers = quizContainer.querySelectorAll(".answers");

    let numCorrect = 0;

    myQuestions.forEach((currentQuestion, questionNumber) => {
      const answerContainer = answerContainers[questionNumber];
      const selector = `input[name=question${questionNumber}]:checked`;
      const userAnswer = (answerContainer.querySelector(selector) || {}).value;

      if (userAnswer === currentQuestion.correctAnswer) {
        numCorrect++;
      } 
    });

    totalContainer.innerHTML = `Você acertou ${numCorrect} questões de ${myQuestions.length}.`;

    (numCorrect ==10) ?  resultsContainer.innerHTML = "Incrível!" : null ;
    (numCorrect >=6) ?  resultsContainer.innerHTML = "Parabéns!" : null;
    (numCorrect <6) ?  resultsContainer.innerHTML = "Estude mais." : null;
    
  }

  function showSlide(n) {
    slides[currentSlide].classList.remove("active-slide");
    slides[n].classList.add("active-slide");
    currentSlide = n;
    
    if (currentSlide === 0) {
      previousButton.style.display = "none";
      homeButton.style.display = "none";
    } else {
      previousButton.style.display = "inline-block";
    }
    
    if (currentSlide === slides.length - 1) {
      nextButton.style.display = "none";
      submitButton.style.display = "inline-block";
      homeButton.style.display = "inline-block";
    } else {
      nextButton.style.display = "inline-block";
      submitButton.style.display = "none";
    }
      
  }

  function showNextSlide() {
    showSlide(currentSlide + 1);
  }

  function showPreviousSlide() {
    showSlide(currentSlide - 1);
  }

  function goHome() {
    location.href = "index.html";
  }

  const quizContainer = document.getElementById("quiz");
  const totalContainer = document.getElementById("total");
  const resultsContainer = document.getElementById("results");
  const submitButton = document.getElementById("submit");
  const homeButton = document.getElementById("home");

  buildQuiz();

  const previousButton = document.getElementById("previous");
  const nextButton = document.getElementById("next");
  const slides = document.querySelectorAll(".slide");
  let currentSlide = 0;

  showSlide(0);

  submitButton.addEventListener("click", showResults);
  previousButton.addEventListener("click", showPreviousSlide);
  nextButton.addEventListener("click", showNextSlide);
  homeButton.addEventListener("click", goHome);
})();

window.onbeforeunload = confirmExit;
function confirmExit()
{
    if(document.getElementById("comentario").value != ""){
        return "Deseja realmente sair desta página?";
    }
}