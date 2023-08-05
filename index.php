<!doctype html>
<html lang="pt-BR">

<?php include 'php/header.php'; ?>
<?php include 'functions.php'; ?>

<body>
  <main class="content">

    <div id="carouselExample" class="carousel slide mb-4" data-bs-ride="carousel" data-bs-interval="3000">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="assets/imgs/promotional-1.webp" class="d-block w-100" alt="Imagem 1">
        </div>
        <div class="carousel-item">
          <img src="assets/imgs/destaque-desk-22544661c316.webp" class="d-block w-100" alt="Imagem 2">
        </div>
        <div class="carousel-item">
          <img src="assets/imgs/destaque-desk-22544661c316.webp" class="d-block w-100" alt="Imagem 3">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Anterior</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Próximo</span>
      </button>
      <ol class="carousel-indicators">
        <li data-bs-target="#carouselExample" data-bs-slide-to="0" class="active"></li>
        <li data-bs-target="#carouselExample" data-bs-slide-to="1"></li>
        <li data-bs-target="#carouselExample" data-bs-slide-to="2"></li>
      </ol>
    </div>

    <div class="cards-title">
      <h1>Produtos mais visualizados</h1>
    </div>
    <div class="cards">

      <div class="card">
        <div class="card-img">
          <img src="assets/imgs/lenovo-laptop-ideapad-3i-15in-hero.webp" alt="">
        </div>
        <div class="card-info">

        </div>
      </div>

      <div class="card">
        <div class="card-img">
          <img src="assets/imgs/lenovo-laptop-ideapad-3i-15in-hero.webp" alt="">
        </div>
        <div class="card-info">

        </div>
      </div>

      <div class="card">
        <div class="card-img">
          <img src="assets/imgs/lenovo-laptop-ideapad-3i-15in-hero.webp" alt="">
        </div>
        <div class="card-info">

        </div>
      </div>

      <div class="card">
        <div class="card-img">
          <img src="assets/imgs/lenovo-laptop-ideapad-3i-15in-hero.webp" alt="">
        </div>
        <div class="card-info">

        </div>
      </div>
    </div>
  </main>

  <?php include 'php/footer.php'; ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.5.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
    crossorigin="anonymous"></script>
</body>

</html>