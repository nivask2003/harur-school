AOS.init({
  duration: 800,
  once: true,
});

document.addEventListener("DOMContentLoaded", function () {
  var header = document.querySelector(".bottom-header");
  if (!header) return;

  var headerParent = header.parentElement;
  var stickyThreshold = header.offsetTop > 0 ? header.offsetTop : 140;
  var isSticky = false;
  var ticking = false;

  function updateHeaderState() {
    var currentScrollY = window.scrollY;

    if (currentScrollY > stickyThreshold + 20) {
      if (!isSticky) {
        isSticky = true;
        var headerHeight = header.offsetHeight;
        if (headerParent) {
          headerParent.style.paddingBottom = headerHeight + "px";
        }
        header.classList.add("header-sticky");
      }
    } else if (currentScrollY <= stickyThreshold) {
      if (isSticky) {
        isSticky = false;
        header.classList.remove("header-sticky");
        if (headerParent) {
          headerParent.style.paddingBottom = "";
        }
      }
    }

    ticking = false;
  }

  window.addEventListener(
    "scroll",
    function () {
      if (!ticking) {
        window.requestAnimationFrame(updateHeaderState);
        ticking = true;
      }
    },
    { passive: true },
  );

  window.addEventListener("resize", function () {
    if (!isSticky) {
      stickyThreshold = header.offsetTop > 0 ? header.offsetTop : 140;
    }
  });

  updateHeaderState();
});

document.addEventListener("DOMContentLoaded", function () {
  var overlay = document.getElementById("videoPopupOverlay");
  var player = document.getElementById("videoPopupPlayer");
  var closeBtn = document.getElementById("videoPopupClose");
  var triggers = document.querySelectorAll(".video-popup-trigger");

  triggers.forEach(function (trigger) {
    trigger.addEventListener("click", function (e) {
      e.preventDefault();
      var src = trigger.getAttribute("data-video");
      player.setAttribute("src", src);
      overlay.classList.add("active");
      document.body.style.overflow = "hidden";
      player.play();
    });
  });

  function closePopup() {
    overlay.classList.remove("active");
    document.body.style.overflow = "";
    player.pause();
    player.removeAttribute("src");
    player.load();
  }

  closeBtn.addEventListener("click", closePopup);
  overlay.addEventListener("click", function (e) {
    if (e.target === overlay) closePopup();
  });
  document.addEventListener("keydown", function (e) {
    if (e.key === "Escape" && overlay.classList.contains("active"))
      closePopup();
  });
});

document.addEventListener("DOMContentLoaded", function () {
  const scroller = document.getElementById("galleryScroller");
  const arrowLeft = document.getElementById("arrowLeft");
  const arrowRight = document.getElementById("arrowRight");
  const fadeLeft = document.getElementById("fadeLeft");
  const fadeRight = document.getElementById("fadeRight");

  if (!scroller || !arrowLeft || !arrowRight) return;

  function scrollByCard(direction) {
    const card = scroller.querySelector(".gallery-card");
    const cardWidth = card
      ? card.getBoundingClientRect().width
      : scroller.clientWidth * 0.6;
    const gap = 14;
    scroller.scrollBy({
      left: direction * (cardWidth + gap),
      behavior: "smooth",
    });
  }

  function updateEdges() {
    const atStart = scroller.scrollLeft <= 4;
    const atEnd =
      scroller.scrollLeft + scroller.clientWidth >= scroller.scrollWidth - 4;

    arrowLeft.classList.toggle("is-hidden", atStart);
    arrowRight.classList.toggle("is-hidden", atEnd);
    if (fadeLeft) fadeLeft.style.opacity = atStart ? 0 : 1;
    if (fadeRight) fadeRight.style.opacity = atEnd ? 0 : 1;
  }

  arrowLeft.addEventListener("click", () => scrollByCard(-1));
  arrowRight.addEventListener("click", () => scrollByCard(1));
  scroller.addEventListener("scroll", updateEdges, { passive: true });
  window.addEventListener("resize", updateEdges);

  updateEdges();
});

document.addEventListener("DOMContentLoaded", function () {
  var scrollTopBtn = document.getElementById("scrollToTopBtn");
  if (!scrollTopBtn) return;

  function toggleScrollTopBtn() {
    if (window.scrollY > 300) {
      scrollTopBtn.classList.add("show");
    } else {
      scrollTopBtn.classList.remove("show");
    }
  }

  window.addEventListener(
    "scroll",
    function () {
      toggleScrollTopBtn();
    },
    { passive: true }
  );

  scrollTopBtn.addEventListener("click", function (e) {
    e.preventDefault();
    window.scrollTo({
      top: 0,
      behavior: "smooth",
    });
  });

  toggleScrollTopBtn();
});

document.addEventListener('DOMContentLoaded', function () {
    var images = Array.prototype.slice.call(document.querySelectorAll('.gallery-lightbox-trigger'));
    var overlay = document.getElementById('galleryLightbox');
    var lbImg = document.getElementById('galleryLightboxImg');
    var lbCaption = document.getElementById('galleryLightboxCaption');
    var closeBtn = document.getElementById('galleryLightboxClose');
    var prevBtn = document.getElementById('galleryLightboxPrev');
    var nextBtn = document.getElementById('galleryLightboxNext');
    var currentIndex = 0;

    if (!overlay || !lbImg || images.length === 0) return;

    function showImage(index) {
        currentIndex = (index + images.length) % images.length;
        var img = images[currentIndex];
        if (!img) return;
        lbImg.setAttribute('src', img.getAttribute('src'));
        lbImg.setAttribute('alt', img.getAttribute('alt') || '');
        if (lbCaption) lbCaption.textContent = img.getAttribute('alt') || '';
    }

    function openLightbox(index) {
        showImage(index);
        overlay.classList.add('active');
        document.body.style.overflow = 'hidden';
    }

    function closeLightbox() {
        overlay.classList.remove('active');
        document.body.style.overflow = '';
    }

    images.forEach(function (img, index) {
        img.addEventListener('click', function () {
            openLightbox(index);
        });
    });

    if (closeBtn) closeBtn.addEventListener('click', closeLightbox);
    if (prevBtn) prevBtn.addEventListener('click', function () { showImage(currentIndex - 1); });
    if (nextBtn) nextBtn.addEventListener('click', function () { showImage(currentIndex + 1); });

    overlay.addEventListener('click', function (e) {
        if (e.target === overlay) closeLightbox();
    });

    document.addEventListener('keydown', function (e) {
        if (!overlay.classList.contains('active')) return;
        if (e.key === 'Escape') closeLightbox();
        if (e.key === 'ArrowLeft') showImage(currentIndex - 1);
        if (e.key === 'ArrowRight') showImage(currentIndex + 1);
    });
});
