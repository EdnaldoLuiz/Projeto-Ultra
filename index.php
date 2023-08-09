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

    <div class="cards-title">
      <h2>Notebooks</h2>
    </div>

    <div class="cards">
      <?php include 'php/lists/notebooks-list.php'; ?>
    </div>

    <div class="cards-title">
      <h2>Smartphones</h2>
    </div>

    <div class="cards">
      <?php include 'php/lists/smartphones-list.php'; ?>
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