<?php
include 'conexao.php';
include 'functions.php';

try {
  $tbNotebooks = "SELECT * FROM Teki.notebooks";
  $statement = $PDO->prepare($tbNotebooks);
  $statement->execute();
  $notebooks = $statement->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
  echo ("Erro na consulta: " . $e->getMessage());
}
?>

<!doctype html>
<html lang="pt-BR">
<?php include 'php/header.php'; ?>

<body>
  <main class="content">

    <div id="carouselExample" class="carousel slide m-3" data-bs-ride="carousel" data-bs-interval="3000">
      <div class="carousel-inner">
        <div class="carousel-item active mb-2">
          <img src="assets/imgs/promotional-1.webp" class="d-block w-100" alt="Imagem 1">
        </div>
        <div class="carousel-item mb-2">
          <img src="assets/imgs/promotional-2.webp" class="d-block w-100" alt="Imagem 2">
        </div>
        <div class="carousel-item mb-2">
          <img src="assets/imgs/promotional-3.webp" class="d-block w-100" alt="Imagem 3">
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

      <?php foreach ($notebooks as $notebook): ?>
        <div class="card">
          <div class="card-img">
            <img src="data:image/png;base64,<?php echo base64_encode($notebook['imagem']); ?>" alt="">
          </div>
          <div class="card-info">
            <h3 class="mt-2 card-title">
              <?php echo $notebook['nome']; ?>
            </h3>
            <div class="ratings d-flex justify-content-left mt-1">
              <?php echo exibirEstrelas(4.8); ?>
              <span class="ml-2">
                <?php echo $numeroAvaliacoes; ?> avaliações
              </span>
            </div>
            <div class="price-section d-flex flex-column mt-3 justify-content-left">
              <span class="strike-text">R$
                <?php echo $notebook['preco_original']; ?>
              </span>
              <h6 class="font-weight-bold price-original">R$
                <?php echo $notebook['preco_promocional']; ?>
              </h6>
            </div>
            <div class="d-flex flex-column mt-3">
              <button class="btn btn-primary btn-sm mb-1" type="button">Detalhes</button>
              <button class="btn btn-outline-primary btn-sm" type="button">
                Adicionar ao carrinho <i class="fa-solid fa-cart-shopping"></i>
              </button>
            </div>
          </div>
        </div>
      <?php endforeach; ?>

    </div>
  </main>

  <?php include 'php/footer.php'; ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.5.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
    crossorigin="anonymous"></script>


</body>

</html>