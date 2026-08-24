$(document).ready(function() { 
$("#shape").hover(function() {
  $(this).toggleClass('paused'); //Pauses on hover
});
});

const boxes = document.querySelectorAll(".animate-box");

const observer = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.classList.add(
        "animate__animated",
        "animate__fadeInUp"
      );

      observer.unobserve(entry.target);
    }
  });
}, {
  threshold: 0.2
});

boxes.forEach(box => observer.observe(box));