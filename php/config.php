<?php


// function getUsuario($login, $senha_md5) {
//     require_once '../conexao/site.conexao.php';
    


//     $db = new DatabaseConnection("localhost", "root", "", "trabalho_interdiciplinar");
//     $conn = $db->getConnection(); // Obtendo a conexão do objeto $db

//     $sql = "SELECT * FROM `usuarios` WHERE (`login` LIKE ? OR `email` LIKE ?) AND `senha` LIKE ?;";
//     $stmt = mysqli_prepare($conn, $sql);
//     mysqli_stmt_bind_param($stmt, "sss", $login, $login, $senha_md5);
//     mysqli_stmt_execute($stmt);
//     $result = mysqli_stmt_get_result($stmt);

//     if (mysqli_num_rows($result) > 0) {
//         $row = mysqli_fetch_assoc($result);
//         mysqli_stmt_close($stmt);
//         mysqli_close($conn);
//         return $row;
//     } else {
//         mysqli_stmt_close($stmt);
//         mysqli_close($conn);
//         return null;
//     }
// }

function criaHeader() {
   // echo "Usuario : " . $usuario;

    echo '<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>| HOME |</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

  <header>
    <nav class="navbar navbar-expand-lg " style="background-color: rgba(186, 255, 191, 0.714);">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Dr. Ana Penha Barros || Terapeuta Ocupacional</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="local.html">Localização</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="contatos.html">Contatos</a>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Opções
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Novo Pacote</a></li>
                <li><a class="dropdown-item" href="#">Pacotes</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="login.html">Cadastro</a></li>
                <li><a class="dropdown-item" href="login.html">Login</a></li>
                <li><a class="dropdown-item" href="MinhaConta.html">Minha Conta</a></li>
              </ul>
            </li>

          </ul>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>
  </header>


        
        <main>';
}

function criaFooter() {
    echo ' </main>

  <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
    <p class="col-md-4 mb-0 text-body-secondary">&copy; 2024 Dr. Ana Penha Barros || Terapeuta Ocupacional, Inc</p>
    <div class="col mb-3">
      <h5>Sessões:</h5>
      <ul class="nav flex-column">
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Contatos</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Localização</a></li>
        <h5>Desabilitados:</h5>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a></li>
      </ul>
    </div>

    <div class="col mb-3">
      <h5>Redes Sociais</h5>
      <ul class="nav flex-column">
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Instagram</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Facebook</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">E-mail</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Whatsapp</a></li>

      </ul>
    </div>
    </div>
  </footer>

<script src="JS/index.js"></script>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>';
}
 
function alertaInicio() {
    echo '<div class="modal modal-sheet position-static  bg-body-secondary p-4 py-md-5" tabindex="-1" role="dialog"
      id="modalSheet">
      <div class="modal-dialog" role="document">
        <div class="modal-content rounded-4 shadow">
          <div class="modal-header border-bottom-0">
            <h1 class="modal-title fs-5">ALERTA IMPORTANTE !!!</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="Close"></button>
          </div>
          <div class="modal-body py-0">
            <p>Por favor, esteja ciente de que nosso site ainda está em desenvolvimento. As funções de cadastro, login e pacotes não estão atualmente operacionais, mas estão disponíveis para visualização e sugestões.</p>
            <p> Obrigado por sua compreensão.</p>
            <p style="align-items: end; text-align: end;">-equipe de desenvolvimento</p>
          </div>
          <div class="modal-footer flex-column align-items-stretch w-100 gap-2 pb-3 border-top-0">
            <button type="button" class="btn btn-lg btn-secondary" data-bs-dismiss="modal" id="fechar" style="background-color: rgb(27, 107, 29);">fechar</button>
          </div>
        </div>
      </div>
    </div>
';
}


?>