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

        <button class="btn btn-outline-primary btn-sm" type="button">
          Adicionar ao carrinho <i class="fa-solid fa-cart-shopping"></i>
        </button>
      </div>
    </div>
  </div>
<?php endforeach; ?>