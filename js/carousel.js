
  const carousel = document.querySelector('.carousel');
  const rightBtn = document.querySelector('.right-btn');
  const leftBtn = document.querySelector('.left-btn');
  
  const cards = document.querySelectorAll('.card');
  const cardWidth = 220; // Largura do card + margem
  let scrollAmount = 0;
  const maxScroll = cardWidth * (cards.length - 1); // Limite de rolagem

  rightBtn.addEventListener('click', () => {
    if (scrollAmount < maxScroll) {
      scrollAmount += cardWidth; // Move para a direita
      carousel.style.transform = `translateX(-${scrollAmount}px)`;
    }
  });

  leftBtn.addEventListener('click', () => {
    if (scrollAmount > 0) {
      scrollAmount -= cardWidth; // Move para a esquerda
      carousel.style.transform = `translateX(-${scrollAmount}px)`;
    }
  });
