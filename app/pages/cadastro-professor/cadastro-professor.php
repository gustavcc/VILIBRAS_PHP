<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../images/Logo.png" type="image/x-icon">
    <link rel="stylesheet" href="../../../public/css/cadastro.css">
    <!--  passar o js para ca <script src="../script/script-cadastro.js"></script> -->
    <title>Cadastro - Professor | VILIBRAS</title>
</head>
<body id="professor">
  <div class="vertical-navbar"></div>
  <div class="container" id="container">
    <div class="left-section" id="left-professor">
      <div class="wave-pattern">
        <div class="intro">
          <h1>VILIBRAS</h1>
          <p class="welcome-message">Seja Bem vindo(a)
            <p id="frase">Somos a <strong>melhor <br> plataforma</strong> de ensino<br> de informática em Língua <br> Brasileira de Sinais</p> 
        <div class="container2">
          </div>
          <div class="logo"></div>
            <img id="foto" class="logo" src="../../../public/images/Logo.png" alt="">
          </div>
            <div class="area-professor">
              <h2>Você é <strong>aluno?</strong></h2>
              <button><a href="../cadastro-aluno/cadastro-aluno.php">Cadastro Aluno</a></button>
            </div>
        </div>
    </div>
    <div class="right-section">
      <div class="mobile">
        <div class="intro2"></div>
        <img id="foto2" class="logo2" src="../../../public/images/Logo.png" alt="">
        <h2 id="h2-mobile">Faça o seu <strong>cadastro</strong></h2>
      </div>
      <div class="class">
        <button id="btnMostrarPopup">Registrar</button>
        <button id="btnMostrarPopup2"><a href="../login/login.php">Fazer Login</a></button>
        <button id="btnMostrarPopup3"><a href="../cadastro-aluno/cadastro-aluno.php">Aluno</a></button>
      </div>

<div id="popupCadastro" class="popup">
  <div class="etapas">
    <div class="etapa" id="etapa1">
      <h2>Etapa 1</h2>
      <form>
        <label for="nome">Seu nome:</label>
        <input type="text" placeholder="Nome">
        <label for="cpf">CPF:</label>
        <input type="text" id="cpf" name="cpf" placeholder="XXX.XXX.XXX-XX" required>
        <label>Sexo:</label>
          <select id="sexo" name="sexo" required>
            <option value="" disabled selected hidden>Selecione o Gênero</option>
            <option value="masculino">Masculino</option>
            <option value="feminino">Feminino</option>
            <option value="nao_especificar">Não Especificar</option>
          </select>
      </form>
      <div id="nav">
        <p>Já é membro? <a href="../login/login.php"">Faça login</a></p>
      <button id="proximo1">Próximo</button>
      </div>
    </div>
    
    <div class="etapa" id="etapa2">
      <h2>Etapa 2</h2>
      <!-- Conteúdo da segunda etapa do formulário -->
      <form>
        <label for="E-mail">Seu E-mail</label>
        <input type="text" placeholder="E-mail" required>
        <label for="senha">Sua senha</label>
        <input type="password" placeholder="Senha" required>
        <label for="data-nascimento">Data de Nascimento:</label>
        <input type="date" id="data-nascimento" name="data-nascimento" required><br><br>
        <button type="submit"><a href="../dashboard/dashboard.php">Inscrição</a></button>
        <label>
          <input type="checkbox" />
          Mantenha-me conectado
        </label>
      </form>
      <button id="proximo2">Voltar</button>
    </div>
  </div>  
  <button id="btnFecharPopup">Fechar</button>
</div>

      </div>
    </div>
  </div>

  <footer></footer>

  <script>
    function mostrarPopup() {
    document.getElementById('popupCadastro').style.display = 'block';
  }
  
  // Função para fechar o pop-up
  function fecharPopup() {
    document.getElementById('popupCadastro').style.display = 'none';
  }
  document.getElementById('btnMostrarPopup').addEventListener('click', mostrarPopup);
  
  document.getElementById('btnFecharPopup').addEventListener('click', fecharPopup);
  
  // Função para avançar para a próxima etapa
  function proximaEtapa(etapaAtual, proximaEtapa) {
    document.getElementById(etapaAtual).style.display = 'none';
    document.getElementById(proximaEtapa).style.display = 'block';
  }
  
  // Botão "Próximo" na primeira etapa
  document.getElementById('proximo1').addEventListener('click', function() {
    proximaEtapa('etapa1', 'etapa2');
  
    // Aplicar efeito fadeIn
    const elementoComEfeito = document.getElementById('container');
    elementoComEfeito.classList.add('fade-in-effect');
  
  
  
  
    // Aplicar efeito de rotação
    const foto = document.getElementById('foto');
    foto.style.transform = 'scale(1.7) rotate(1deg)';
  
    const foto2 = document.getElementById('foto2');
    foto2.style.transform = 'scale(2.5) rotate(345deg)';
  
    setTimeout(function() {
      elementoComEfeito.classList.remove('fade-in-effect');
    }, 1000); // Tempo de espera em milissegundos
  });
  
  const leftsection = document.querySelector('.left-professor');
  const proximo2 = document.querySelector('proximo2');
  
  // "#007BFF"
  function alterarCor() {
      var corPredefinida = "url ('../../../public/images/Wavy Elegant Lines Navy Background.jpg')";
      leftsection.style.background = corPredefinida;
      proximo2.style.background = corPredefinida;
  
  }
  
  var botao = document.getElementById("proximo1");
  botao.addEventListener("click", alterarCor); 
  
  function alterarCor2() {
      var corPredefinida = "url ('../../../public/images/69603047_uyfydu4.jpg')";
      leftsection.style.background = corPredefinida;
  }
  
  var botao = document.getElementById("proximo2");
  botao.addEventListener("click", alterarCor2);
  
  
  document.getElementById('proximo2').addEventListener('click', function() {
    proximaEtapa('etapa2', 'etapa1'); 
    const foto = document.getElementById('foto');
      foto.style.transform = 'scale(2.5) rotate(345deg)';
    const elementoComEfeito = document.getElementById('container');
      elementoComEfeito.classList.add('fade-in-effect');
  
    setTimeout(function() {
      elementoComEfeito.classList.remove('fade-in-effect');
    }, 1000); // Tempo de espera em milissegundos
    }
    
  );
  
  
  window.addEventListener('load', function () {
      const foto = document.getElementById('foto');
      const logo = document.querySelector('.logo');
      const foto2 = document.getElementById('foto2');
  
  
      foto.style.transform = 'scale(2.5) rotate(345deg)';
      foto2.style.transform = 'scale(2.5) rotate(355deg)';
  
  }); 
  </script>
</body>
</html>