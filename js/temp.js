
// Open the Modal
function openModal() {
    document.getElementById("myModal").style.display = "block";
  }
  
  // Open the Olive Garden Modals
  function openOGModal() {
    document.getElementById("OGModal").style.display = "block";
  }
  
  // Close the Modal
  function closeModal() {
    document.getElementById("myModal").style.display = "none";
  }
  
  // Close the Olive Garden Modals
  function closeOGModal() {
    document.getElementById("OGModal").style.display = "none";
  }
  
  var slideIndex = 1;
  showSlides(slideIndex);
  
  var OGslideIndex = 1;
  showOGSlides(OGslideIndex);
  
  // Next/previous controls
  function plusSlides(n) {
    showSlides(slideIndex += n);
  }
  
  // Thumbnail image controls
  function currentSlide(n) {
    showSlides(slideIndex = n);
  }
  
  // Thumbnail image controls
  function OGcurrentSlide(n) {
    showOGSlides(OGslideIndex = n);
  }
  
  function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
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
    captionText.innerHTML = dots[slideIndex-1].alt;
  }
  
  function showOGSlides(n) {
    var OGi;
    var OGslides = document.getElementsByClassName("mySlides");
    var OGdots = document.getElementsByClassName("demo");
    var OGcaptionText = document.getElementById("OGcaption");
    if (n > OGslides.length) {OGslideIndex = 1}
    if (n < 1) {OGslideIndex = OGslides.length}
    for (OGi = 0; OGi < slides.length; OGi++) {
      OGslides[OGi].style.display = "none";
    }
    for (OGi = 0; OGi < OGdots.length; OGi++) {
      OGdots[OGi].className = OGdots[OGi].className.replace(" active", "");
    }
    OGslides[OGslideIndex-1].style.display = "block";
    OGdots[OGslideIndex-1].className += " active";
    OGcaptionText.innerHTML = OGdots[OGslideIndex-1].alt;
  }
  