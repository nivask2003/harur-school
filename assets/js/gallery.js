const scroller = document.getElementById('galleryScroller');
  const arrowLeft = document.getElementById('arrowLeft');
  const arrowRight = document.getElementById('arrowRight');
  const fadeLeft = document.getElementById('fadeLeft');
  const fadeRight = document.getElementById('fadeRight');
 
  function scrollByCard(direction) {
    const card = scroller.querySelector('.gallery-card');
    const cardWidth = card ? card.getBoundingClientRect().width : scroller.clientWidth * 0.6;
    const gap = 14;
    scroller.scrollBy({ left: direction * (cardWidth + gap), behavior: 'smooth' });
  }
 
  function updateEdges() {
    const atStart = scroller.scrollLeft <= 4;
    const atEnd = scroller.scrollLeft + scroller.clientWidth >= scroller.scrollWidth - 4;
 
    arrowLeft.classList.toggle('is-hidden', atStart);
    arrowRight.classList.toggle('is-hidden', atEnd);
    fadeLeft.style.opacity = atStart ? 0 : 1;
    fadeRight.style.opacity = atEnd ? 0 : 1;
  }
 
  arrowLeft.addEventListener('click', () => scrollByCard(-1));
  arrowRight.addEventListener('click', () => scrollByCard(1));
  scroller.addEventListener('scroll', updateEdges, { passive: true });
  window.addEventListener('resize', updateEdges);
 
  updateEdges();