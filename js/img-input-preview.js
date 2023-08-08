const inputImagem = document.getElementById("imagem");
const imagemPreview = document.getElementById("imagem-preview");
const imgName = document.getElementById("img-name");

inputImagem.addEventListener('change', function () {
  imgName.textContent = this.files[0].name
})

inputImagem.addEventListener("change", function () {
  const file = inputImagem.files[0];
  if (file) {
    const reader = new FileReader();
    reader.onload = function (event) {
      imagemPreview.src = event.target.result;
    };
    reader.readAsDataURL(file);
  } else {
    imagemPreview.src = "#";
  }
});
