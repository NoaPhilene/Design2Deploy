// welkom pagina slidshow

let slideIndex = 1;
showSlides(slideIndex);

// Knop naar volgende of vorige slide
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Ga naar specifieke slide
function currentSlide(n) {
  showSlides(slideIndex = n);
}

// Toon de juiste slide en update dots
function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");

  if (n > slides.length) { slideIndex = 1 }
  if (n < 1) { slideIndex = slides.length }

  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }

  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }

  slides[slideIndex - 1].style.display = "block";
  dots[slideIndex - 1].className += " active";
}

// Automatische slideshow
let autoSlideIndex = 1;
function autoShowSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");

  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }

  autoSlideIndex++;
  if (autoSlideIndex > slides.length) { autoSlideIndex = 1 }

  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }

  slides[autoSlideIndex - 1].style.display = "block";
  dots[autoSlideIndex - 1].className += " active";

  // update de hoofdteller ook
  slideIndex = autoSlideIndex;

  setTimeout(autoShowSlides, 3000); // elke 3 seconden
}

autoShowSlides();

// einde slidshow