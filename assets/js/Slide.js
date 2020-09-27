var slideIndex = 0;
var slideIndex_manu = 1;
showSlides();
showSlides_manu(slideIndex_manu);

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 2000); // Change image every 5 seconds
}


// Next/previous controls
function plusSlides(n) {
  showSlides_manu(slideIndex_manu += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides_manu(slideIndex_manu = n);
}

function showSlides_manu(n) {
  var i_manu;
  var slides_manu = document.getElementsByClassName("mySlides2");
  var dots = document.getElementsByClassName("dot");
  if (n > slides_manu.length) {slideIndex_manu = 1}
  if (n < 1) {slideIndex_manu = slides_manu.length}
  for (i_manu = 0; i_manu < slides_manu.length; i_manu++) {
      slides_manu[i_manu].style.display = "none";
  }
  for (i_manu = 0; i_manu < dots.length; i_manu++) {
      dots[i_manu].className = dots[i_manu].className.replace(" active", "");
  }
  slides_manu[slideIndex_manu-1].style.display = "block";
  dots[slideIndex_manu-1].className += " active";
}