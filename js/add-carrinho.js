$(document).ready(function () {
  let cartTotal = 0;
  let totalPrice = 0.0;

  $(".add-to-cart-btn").click(function () {
    const productId = $(this).data("product-id");
    const productPrice = parseFloat($(this).data("product-price"));
    cartTotal++;
    totalPrice += productPrice;

    $(".qty").text(cartTotal + " Produto(s)");
    $(".total-price").text("$" + totalPrice.toFixed(2));
  });
});