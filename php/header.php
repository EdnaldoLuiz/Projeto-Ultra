<?php
session_start();
?>

<!doctype html>
<html lang="pt-BR">

<head>
  <title>Teki</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="stylesheet" href="/css/style.css">
  <link rel="stylesheet" href="/css/header.css">
  <link rel="stylesheet" href="/css/footer.css">

<body>

  <div class="utility-nav d-none d-md-block contact-top">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-6">
          <strong class="small"><i class="bx bx-envelope"></i> contatoednaldoluiz@gmail.com | <i
              class="bx bx-phone"></i>
            +55 (81) 98779-6232
          </strong>
        </div>

        <div class="col-12 col-md-6 text-right">
          <strong class="small">frete gratis em compras acima de 999R$</strong>
        </div>
      </div>
    </div>
  </div>

  <header class="section-header">
    <section class="header-main">
      <div class="container-fluid">
        <div class="row p-2 pt-3 pb-3 align-items-center">
          <div class="col-md-2">
            <img class="d-none d-md-flex logo" src="assets/imgs/logo.png">
          </div>
          <div class="col-md-6">
            <form class="form-inline my-2 my-lg-0 mx-auto" action="/php/pesquisar.php" method="get">
              <div class="input-group">
                <input class="form-control" type="search" placeholder="procure por produtos" aria-label="Search"
                  name="termo">
                <button class="btn btn-primary" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
              </div>
            </form>
          </div>

          <div class="col-md-2">
            <div class="d-flex justify-content-center">
              <div class="d-flex flex-row align-items-center header-icons">
                <span class="icons">
                  <i class="fa-solid fa-circle-user"></i>
                </span>
                <div class="d-flex flex-column ms-2 icon-desc">

                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" role="button"
                      data-bs-toggle="dropdown" aria-expanded="false">
                      <?php
                      if (isset($_SESSION['user_name'])) {
                        echo '<span class="text-center fw-bold">Olá, ' . $_SESSION['user_name'] . '</span>';
                      } else {
                        echo '<span class="text-center fw-bold">Faça login <br> ou seu cadastro</span>';
                      }
                      ?>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <?php
                      if (isset($_SESSION['user_name'])) {
                        echo '<li><a class="dropdown-item" href="php/logout.php">Sair</a></li>';
                      } else {
                        echo '<li><a class="dropdown-item" href="pages/login.html">Login</a></li>';
                        echo '<li><a class="dropdown-item" href="#">Registrar</a></li>';
                      }
                      ?>
                    </ul>
                  </li>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-2">
            <div class="d-flex align-items-center">
              <div id="cart" class="cart" data-totalitems="0">
                <i class="fas fa-shopping-cart"></i>
              </div>
              <span class="ml-2 text-center fw-bold text-white">Produtos</span>
            </div>
          </div>


        </div>
    </section>
  </header>

  <nav class="navbar navbar-expand-md text-white">
    <div class="container-fluid">
      <a class="navbar-brand d-md-none d-md-flex text-white" href="#">Categorias</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" role="button"
              data-bs-toggle="dropdown" aria-expanded="false">
              Outros
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="#">Câmeras</a></li>
              <li><a class="dropdown-item" href="#">TVs</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link active text-white" aria-current="page" href="#">Smartphones</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#">Notebooks</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#">Computadores</a>
          </li>
        </ul>
      </div>
    </div>

  </nav>
  </header>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>

  <script src="js/add-carrinho.js"></script>