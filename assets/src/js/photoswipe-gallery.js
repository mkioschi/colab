document.addEventListener("DOMContentLoaded", function(event) {
  // Seletor da(s) galeria(s). Sem o ".".
  var gallerySelector = "photoswipe-gallery";

  // Método para encontrar a galeria atual
  var findCurrentGallery = function(currentThumbnail) {
    var currentGalleryFound = false;
    var currentGallery = currentThumbnail;

    while (currentGalleryFound === false) {
      currentGallery = currentGallery.parentNode;

      if (currentGallery.classList.contains(gallerySelector)) {
        currentGalleryFound = true;
      }
    }

    return currentGallery;
  };

  // Método "parseThumbnailElements".
  var parseThumbnailElements = function(currentGallery) {
    // Inicializa o array de itens.
    var items = [];

    // Seleciona todas tags <a> dentro da galeria atual.
    var aElements = currentGallery.querySelectorAll("a");

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

    // Encontra a galeria atual.
    var currentGallery = findCurrentGallery(currentThumbnail);

    // Monta o array de items da galeria.
    var items = parseThumbnailElements(currentGallery);

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

  // Seleciona todas as galerias do DOM.
  var galleriesElements = document.querySelectorAll("." + gallerySelector);

  // Percorre cada Galeria
  galleriesElements.forEach(function(galleryElement, index) {
    galleryElement.setAttribute("data-pswp-uid", index + 1);

    // Seleciona todos os elementos <a>.
    var aElements = galleryElement.querySelectorAll("a");

    // Adiciona o evento "click" em todos botões
    aElements.forEach(function(aElement, index) {
      aElement.addEventListener("click", onThumbnailsClick);
    });
  });
});
