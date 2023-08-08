<!doctype html>
<html lang="en">

<head>
  <link rel="stylesheet" href="/css/style.css">
  <link rel="stylesheet" href="/css/header.css">
  <link rel="stylesheet" href="/css/footer.css">
</head>

<?php include 'header.php'; ?>

<main>
  <div class="container mt-5 mb-5">
    <div class="d-flex justify-content-center row">
      <div class="col-md-12">
        <div class="row p-2 bg-white border rounded mt-2">
          <div class="col-md-3 mt-1"><img class="img-fluid img-responsive rounded product-image"
              src="/assets/imgs/lenovo-laptop-ideapad-3i-15in-hero.webp"></div>
          <div class="col-md-6 mt-1">
            <h5>Notebook IdeaPad 3i (15” Intel)</h5>
            <div class="d-flex flex-row">
              <div class="ratings mr-2">
                <?php echo exibirEstrelas(4.8); ?> <span>4.8</span>
              </div>
            </div>
            <div class="mt-1 mb-1 spec-1">
              <span>Armazenamento 128 GB SSD</span>
              <span class="dot"></span>
              <span>Processador Intel® Core™ i5-1135G7 de 11ª geração (2,40 GHz até 4,20 GHz)</span>
              <span class="dot"></span>
              <span>Placa de vídeo Intel Iris Xe Graphics</span>
              <span class="dot"></span>
              <span>Bateria 2 células 38 Wh</span>
              <span><span class="dot"></span>Tela 15.6" Full HD (1920 x 1080) Antirreflexo</span>
            </div>
            <p class="text-justify text-truncate para mb-0">There are many variations of passages of Lorem Ipsum
              available, but the majority have suffered alteration in some form, by injected humour, or randomised
              words which don't look even slightly believable.</p>
          </div>
          <div class="align-items-center align-content-center col-md-3 border-left mt-1">
            <?php
            $precoNormal = 2670.99;
            $precoPromocional = 2350.99;
            echo exibirEconomia($precoNormal, $precoPromocional);
            ?>
            <div class="d-flex flex-row align-items-center">
              <h4 class="mr-1">R$
                <?php echo $precoPromocional; ?>
              </h4>
              <span class="strike-text">R$
                <?php echo $precoNormal; ?>
              </span>
            </div>
            <div class="d-flex flex-column mt-4">
              <button class="btn btn-primary btn-sm" type="button">Detalhes</button>
              <button class="btn btn-outline-primary btn-sm mt-2" type="button">
                Adicionar ao carrinho <i class="fa-solid fa-cart-shopping"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>

<?php include 'footer.php'; ?>
</body>

<style>
  body {
    background: #eee
  }

  .ratings i {
    font-size: 16px;
    color: red
  }



  .product-image {
    width: 100%
  }

  .dot {
    height: 7px;
    width: 7px;
    margin-left: 6px;
    margin-right: 6px;
    margin-top: 3px;
    background-color: blue;
    border-radius: 50%;
    display: inline-block
  }

  .spec-1 {
    color: #938787;
    font-size: 15px
  }

  h5 {
    font-weight: 400
  }

  .para {
    font-size: 16px
  }

  .economia-box {
    background-color: green;
    color: white;
    padding: 5px 10px;
    text-align: center;
    border-radius: 5px;
    font-size: 14px;
    margin-top: 5px;
    width: fit-content;
  }
</style>

</html>