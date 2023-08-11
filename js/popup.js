document.addEventListener("DOMContentLoaded", function () {

  var botao = document.querySelector(".cadastrar");
  var botaoFechar = document.getElementById("close-popup");

  var div = document.getElementById("popup");

  botao.addEventListener("click", function () {
    div.style.display = "block";
  });

  botaoFechar.addEventListener("click", function () {
    div.style.display = "none";
  })
});
