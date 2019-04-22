var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var slide = document.getElementsByClassName("mySlide");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";

  if (n > slide.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slide.length}
  for (i = 0; i < slide.length; i++) {
      slide[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slide[slideIndex-1].style.display = "block";  
}

function openNav() {
    document.getElementById("mySidenav").style.width = "287px";
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.body.style.backgroundColor = "white";
}

function open_Nav() {
    document.getElementById("my_Sidenav").style.width = "287px";
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function close_Nav() {
    document.getElementById("my_Sidenav").style.width = "0";
    document.body.style.backgroundColor = "white";
}

function openNav1() {
    document.getElementById("mySidenav-01").style.width = "287px";
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav1() {
    document.getElementById("mySidenav-01").style.width = "0";
    document.body.style.backgroundColor = "white";
}