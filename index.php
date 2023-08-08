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
      <?php include 'php/notebooks-list.php'; ?>
    </div>
  </main>
  <?php include 'php/footer.php'; ?>
</body>

</html>