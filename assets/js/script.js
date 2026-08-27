AOS.init({
  duration: 800,
  once: true,
});

document.addEventListener("DOMContentLoaded", function () {
  var header = document.querySelector(".bottom-header");
  if (!header) return;

  var stickyPoint = header.offsetTop;
  var headerHeight = header.offsetHeight;
  var lastScrollY = window.scrollY;
  var ticking = false;

  function updateHeaderState() {
    var currentScrollY = window.scrollY;

    // Toggle the sticky (fixed) state once we've scrolled past the header
    if (currentScrollY > stickyPoint) {
      if (!header.classList.contains("header-sticky")) {
        header.classList.add("header-sticky");
        document.body.style.paddingTop = headerHeight + "px";
      }
    } else {
      if (header.classList.contains("header-sticky")) {
        header.classList.remove("header-sticky");
        document.body.style.paddingTop = "";
      }
    }

    // Hide the header when scrolling down, reveal it when scrolling up.
    // Only kicks in once we've scrolled past the header itself, so it
    // doesn't flicker while still at the top of the page.
    if (currentScrollY > headerHeight) {
      if (currentScrollY > lastScrollY) {
        header.classList.remove("header-hidden");
      } else {
        header.classList.remove("header-hidden");
      }
    } else {
      header.classList.remove("header-hidden");
    }

    lastScrollY = currentScrollY;
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

const scroller = document.getElementById("galleryScroller");
const arrowLeft = document.getElementById("arrowLeft");
const arrowRight = document.getElementById("arrowRight");
const fadeLeft = document.getElementById("fadeLeft");
const fadeRight = document.getElementById("fadeRight");

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
  fadeLeft.style.opacity = atStart ? 0 : 1;
  fadeRight.style.opacity = atEnd ? 0 : 1;
}

arrowLeft.addEventListener("click", () => scrollByCard(-1));
arrowRight.addEventListener("click", () => scrollByCard(1));
scroller.addEventListener("scroll", updateEdges, { passive: true });
window.addEventListener("resize", updateEdges);

updateEdges();
