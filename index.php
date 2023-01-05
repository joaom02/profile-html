<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Profile</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="style.css">
</head>

<body class="light">
  <button
        type="button"
        class="btn btn-lg light"
        id="btn-back-to-top"
        >
        <i class="bi bi-arrow-up-circle-fill"></i>
</button>
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light light">
      <a class="navbar-brand light" href=" ">Meu Perfil</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <i class="bi bi-list light"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item" >
            <a class="nav-link light" href="#geral">Geral</a>
          </li>
          <li class="nav-item">
            <a class="nav-link light" href="#skills">Skills</a>
          </li>
          <li class="nav-item">
            <a class="nav-link light" href="#lingua">Línguas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link light" href="#sobreMim">Sobre Mim</a>
          </li>
          <li class="nav-item">
            <a class="nav-link light" href="../CMS/auth/login.php">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link light" href="../CMS/auth/logout.php">Logout</a>
          </li>
          <li class="nav-item">
            <a class="nav-link light">Dark Mode: 
              <label class="switch">
                <input type="checkbox" onclick="changeColor()">
                <span class="slider round"></span>
              </label>
            </a>
          </li>
        </ul>
      </div>
    </nav>
    <div class="row">
      <div class="col-sm-6 border-end  text-center" id="geral">
        <img class="rounded" src="assets/eu.jpg" alt="EU" height="240" width="230">
        <h1>João Martins</h1>
        <h3>Estudante do IPVC</h3>
        <h5>Curso de Engenharia de Informatica da ESTG</h5>
        <b>Contactos: </b>
        <a href="https://github.com/joaom02" class="lightI" id="git"><i class="bi bi-github"></i></a>
        <a href="https://www.linkedin.com/in/jo%C3%A3o-martins-08874b1b9/" class="lightI" id="link"><i class="bi bi-linkedin"></i></a>
        <a onclick="mail()" href="#form" class="lightI" id="botao"><i class="bi bi-envelope-fill"></i></a>
      </div>
      <div class="col-sm-6">
        <div class="row" id="skills">
          <h3>Skills: </h3>
          <div id="includedContent"></div>
        </div>
        <hr class="lightHr">
        <div class="row" id="lingua">
          <h3>Línguas: </h3>
          <div id="includedContent2"></div>
        </div>
      </div>
    </div>
    <hr class="lightHr">
    <div class="row" id="sobreMim">
      <h3> Sobre mim:</h3>
      <p>Meu nome é João Pedro Fonte Martins. Nasci no dia 1 de Maio de 2002, ou seja, atualmente tenho 20 anos.
        Sou de Barcelos e tenho uma irmã mais velha que atualmente vive em Viana do Castelo, o que ajudou-me a escolher
        o IPVC para estudar.
        Escolhi o curso de Engenharia Informática porque na altura pareceu-me interessante e até hoje não mudei de
        ideia.
        Já completei vários trabalhos usando várias das minhas diferentes habilitações, sendo que alguns deles são
        possiveis
        de encontrar na minha conta de GitHub, que se encontra no meus contactos.</p>
    </div>
    <hr class="lightHr">
    <div class="row text-center" id="form">
      <form action=" ">
        <div>
          <label for="idHead"><b>Header: </b></label>
          <input type="text" id="idMsg"></textarea>
        </div>
        <div>
          <label for="idMsg"><b>Msg: </b></label>
          <textarea id="idMsg"></textarea>
        </div>
        <input type="submit" onclick="enviar()" value="Enviar">
        <input type="button" value="Cancelar" onclick="cancelar()">
      </form>
    </div>

  </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="script.js"></script>
<script> 
  $(function(){
    $("#includedContent").load("../CMS/pages/public/readSkill.php"); 
  });

  $(function(){
    $("#includedContent2").load("../CMS/pages/public/readlanguage.php"); 
  });
</script>

</html>