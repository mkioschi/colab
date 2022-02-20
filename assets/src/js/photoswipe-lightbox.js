document.addEventListener("DOMContentLoaded", function(event) {
  // Seletor da(s) imagens(s). Sem o ".".
  var imageSelector = "photoswipe-lightbox";

  // Método "parseThumbnailElements".
  var parseThumbnailElements = function() {
    // Inicializa o array de itens.
    var items = [];

    // Seleciona todos os elementos <a>.
    var aElements = document.querySelectorAll("a." + imageSelector);

    // Percorre todos os itens do array "a".
    aElements.forEach(function(aElement, index) {
      var href = aElement.getAttribute("href");
      var sizes = aElement.getAttribute("data-size").split("x");
      var width = parseInt(sizes[0]);
      var height = parseInt(sizes[1]);
      var figcaption = aElement.parentElement.getElementsByTagName(
        "figcaption"
      )[0];

      // Monda o objeto "item";
      var item = {
        src: href,
        w: width,
        h: height
      };

      // Verifica se há uma legenda.
      if (figcaption) {
        item.title = figcaption.innerText;
      }

      // Salva o elemento <figure>. Necessário para animação do "getThumbBoundsFn".
      item.figureElement = aElement.parentElement;

      // Adiciona o objeto "item" ao array "items";
      items.push(item);
    });

    return items;
  };

  // Método "onThumbnailsClick".
  var onThumbnailsClick = function(event) {
    event.preventDefault();

    // Seleciona o elemento raiz do PhotoSwipe.
    var pswpElement = document.querySelectorAll(".pswp")[0];

    // Recebe o thumbnail atual.
    var currentThumbnail = event.target.parentNode;

    // Monta o array de items da galeria.
    var items = parseThumbnailElements();

    // Índice do thumbnail atual.
    var index = parseInt(currentThumbnail.getAttribute("data-index"));

    // Monta o objeto "options".
    var options = {
      index: index,
      history: false,
      shareEl: false,
    };

    // Inicializa o PhotoSwipe
    var photoSwipe = new PhotoSwipe(
      pswpElement,
      PhotoSwipeUI_Default,
      items,
      options
    );

    // Abre o PhotoSwipe
    photoSwipe.init();
  };

  // Seleciona todos os elementos <a>.
  var aElements = document.querySelectorAll("a." + imageSelector);

  // Adiciona o evento "click" em todos botões
  aElements.forEach(function(aElement, index) {
    aElement.addEventListener("click", onThumbnailsClick);
  });
});
