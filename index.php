<?php
include 'php/functions.php';
include 'php/consultas.php';
?>

<!doctype html>
<html lang="pt-BR">
<?php include 'php/header.php'; ?>

<body>
  <main class="content">
    <?php include 'pages/carrossel.html'; ?>

    <div class="cards-title d-flex mt-4" style="flex-direction: column;">
      <div>
        <img src="assets/imgs/smartphones.png" alt="" style="width: 100%" height="150px">
      </div>
      <h2 class="mt-4">Smartphones</h2>
    </div>

    <div class="cards">
      <?php include 'php/lists/smartphones-list.php'; ?>
    </div>

    <div class="cards-title d-flex mt-4" style="flex-direction: column;">
      <div>
        <img src="assets/imgs/notebooks.png" alt="" style="width: 100%" height="150px">
      </div>
      <h2 class="mt-4">Notebooks</h2>
    </div>

    <div class="cards">
      <?php include 'php/lists/notebooks-list.php'; ?>
    </div>

    <div class="cards-title">
      <h2>Computadores</h2>
    </div>

    <div class="cards">
      <?php include 'php/lists/computers-list.php'; ?>
    </div>

  </main>
  <?php include 'php/footer.php'; ?>
</body>

</html>