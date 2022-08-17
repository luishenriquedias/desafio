<?php 
//var_dump($_SESSION);
  if(!isset($_SESSION['logado'])){
    var_dump($_SESSION);
    //header('location:/desafio-leo');
    //exit;
  }

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="../js/funcoes.js"></script>
</head>
<link rel="stylesheet" href="../css/estilo.css">
<title>Desafio Leo</title>
</head>

<body>
  <header id="topo">
    <nav id="menu">
      <div id="logo">
        <img src="../img/logo-nav.png" alt="">
      </div>
      <form action="" id="pesquisa">
        <input type="search" name="pesquisa" id="procura" placeholder="pesquisar cursos">
      </form>

    </nav>
  </header>
  <section id="carrossel">
    <div class="galeria container">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          <div class="item active">
            <img class="img-galeria" src="../img/slide-1.jpg" alt="Los Angeles" style="height: 455px;">
          </div>

          <div class="item">
            <img class="img-galeria" src="../img/slide-2.jpg" alt="Chicago" style="height:455px">
          </div>

          <div class="item">
            <img class="img-galeria" src="../img/slide-3.jpg" alt="New York" style="height: 455px;">
          </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

    </div>
  </section>
  <main id="corpo">

    <h2>Meus cursos</h2>
    <?php
    require_once '../controller/criacurso.controller.php';
    ?>
    <div class="linha"></div>
    <?php
    foreach ($resultado as $result) {
    ?>
      <div id="cursos">
        <div class="curso">
          <button onclick="abreModalCurso()">
            <img src="../img/add-course.png" alt="">
            <p><?=$result->nome?></p>
          </button>
        </div>
      </div>
    <?php

    }

    ?>


    <!--abre modal cursos-->
    <div id="cortina-curso">
      <div id="modal-curso">
        <button onclick="fechaModalCurso()" id="botao-fechar-curso">X</button>
        <form id="form-curso" action="../controller/criacurso.controller.php" method="post">
          <div id="arquivo-curso">
            <label id="label-curso" for="">escolha uma imagem</label>
            <input type="file" name="escolha-img" id="escolha-img">
          </div>
          <div id="name-curso">
            <label id="label-nome-curso" for="">nome do curso:</label>
            <input type="text" name="nome" id="nome-curso" placeholder="Seu nome">
          </div>
          <div id="div-email-curso">
            <label id="label-novo-curso" for="">Inserir marcação curso novo:</label>
            <select name="novo-curso" id="novo-curso">
              <option value="sim">sim</option>
              <option value="nao">não</option>
            </select>
          </div>
          <div id="div-info-curso">
            <label for="">Descrição do curso:</label>
            <textarea name="infos" id="info-curso" cols="30" rows="10" placeholder="Descreva..." maxlength="400"></textarea>
          </div>
          <div id="div-botao-curso">
            <input type="submit" class="btn btn-success" value="Enviar">
          </div>



          <!--fecha modal cursos-->
  </main>
  <footer id="rodape">
    <div id="infos">
      <div id="logo-footer">
        <img src="../img/logo-footer.png" alt="">
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit...</p>
      </div>
      <div id="contato">
        <h3>Contato</h3>
        <a href="">(21) 98765-3434</a>
        <a href="">contato@leolearning</a>
      </div>
      <div id="links">
        <h3>Redes Sociais</h3>
        <div id="redes">
          <a href=""><img src="../img/twitter.png" alt="twitter"></a>
          <a href=""><img src="../img/youtube.png" alt="youtube"></a>
          <a href=""><img src="../img/pinterest.png" alt="pinterest"></a>
        </div>
      </div>
    </div>
    <div id="direitos">
      <p>Copyright 2022 - All rights reserved.</p>
    </div>

  </footer>
  <script src="../js/funcoes.js"></script>
</body>

</html>