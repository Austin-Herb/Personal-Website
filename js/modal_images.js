
// Function to open the RHE modal
function openRHEModal() {
  document.getElementById("RHEmodal").style.display = "block";
}

// Function to open the OG modal
function openOGModal() {
  document.getElementById("OGmodal").style.display = "block";
}

// Function to close the RHE modal 
function closeRHEModal() {
  document.getElementById("RHEmodal").style.display = "none";
}

// Function to close the OG modal
function closeOGModal() {
  document.getElementById("OGmodal").style.display = "none";
}

// RHE slide index
var RHEslideIndex = 1;
showRHESlides(RHEslideIndex);

// OG slide index
var OGslideIndex = 1;
showOGSlides(OGslideIndex);

// RHE next/previous controls
function nextRHESlide(n) {
  showRHESlides(RHEslideIndex += n);
}

// OG next/previous controls
function nextOGSlide(n) {
  showOGSlides(OGslideIndex += n);
}

// RHE thumbnail image controls
function currentRHESlide(n) {
  showRHESlides(RHEslideIndex = n);
}

// OG thumbnail image controls
function currentOGSlide(n) {
  showOGSlides(OGslideIndex = n);
}

// Function to show RHE slides
function showRHESlides(n) {
  var RHEi;
  var RHEslides = document.getElementsByClassName("RHEslides");
  var RHEdots = document.getElementsByClassName("RHEdemo");
  var RHEcaptionText = document.getElementById("RHEcaption");
  if (n > RHEslides.length) {RHEslideIndex = 1}
  if (n < 1) {RHEslideIndex = RHEslides.length}
  for (RHEi = 0; RHEi < RHEslides.length; RHEi++) {
    RHEslides[RHEi].style.display = "none";
  }
  for (RHEi = 0; RHEi < RHEdots.length; RHEi++) {
    RHEdots[RHEi].className = RHEdots[RHEi].className.replace(" active", "");
  }
  RHEslides[RHEslideIndex-1].style.display = "block";
  RHEdots[RHEslideIndex-1].className += " active";
  RHEcaptionText.innerHTML = RHEdots[RHEslideIndex-1].alt;
}

// Function to show OG slides
function showOGSlides(n) {
  var OGi;
  var OGslides = document.getElementsByClassName("OGslides");
  var OGdots = document.getElementsByClassName("OGdemo");
  var OGcaptionText = document.getElementById("OGcaption");
  if (n > OGslides.length) {OGslideIndex = 1}
  if (n < 1) {OGslideIndex = OGslides.length}
  for (OGi = 0; OGi < OGslides.length; OGi++) {
    OGslides[OGi].style.display = "none";
  }
  for (OGi = 0; OGi < OGdots.length; OGi++) {
    OGdots[OGi].className = OGdots[OGi].className.replace(" active", "");
  }
  OGslides[OGslideIndex-1].style.display = "block";
  OGdots[OGslideIndex-1].className += " active";
  OGcaptionText.innerHTML = OGdots[OGslideIndex-1].alt;
}
