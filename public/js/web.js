

const buttonMobile = document.querySelector('.mobile-btn');
const navigation = document.querySelector("nav");

buttonMobile.addEventListener("click", function (event) {
  this.classList.toggle('active');
  navigation.classList.toggle('active');
})

document.querySelectorAll("a[href*='get-started']").forEach(function (anchor) {
  anchor.classList.add('button-primary');
  anchor.addEventListener("click", (event) => {
    alert("Membuka popup");
  });
});

document.querySelectorAll("li.has-child").forEach(function (anchor) {
  anchor.querySelector(".caret").addEventListener("click", (event) => {
    anchor.classList.toggle('active');
  });
});



function search() {
  var x = document.getElementById("mySearch");


  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}

// HUBUNGI KAMI START
function instagram() {
  window.location.href = "https://www.instagram.com/ibrahim_cahya00/"
}
//HUBUNGI KAMI END

// POPUP 1
var modal1 = document.getElementById("popup1");


var btn1 = document.getElementById("btn-identitas");


var svg1 = document.getElementsByClassName("close-identitas")[0];


btn1.onclick = function () {
  modal1.style.display = "block";
}


svg1.onclick = function () {
  modal1.style.display = "none";
}


window.onclick = function (event) {
  if (event.target == modal1) {
    modal1.style.display = "none";
  }
}
// POPUP 1 END

// POPUP 2 START
var modal2 = document.getElementById("popup2");


var btn2 = document.getElementById("btn-visi");


var svg2 = document.getElementsByClassName("close-visi")[0];


btn2.onclick = function () {
  modal2.style.display = "block";
}


svg2.onclick = function () {
  modal2.style.display = "none";
}


window.onclick = function (event) {
  if (event.target == modal2) {
    modal2.style.display = "none";
  }
}
// POPUP 2 END

// POPUP 3 START
var modal3 = document.getElementById("popup3");


var btn3 = document.getElementById("btn-struktur");


var svg3 = document.getElementsByClassName("close-struktur")[0];


btn3.onclick = function () {
  modal3.style.display = "block";
}


svg3.onclick = function () {
  modal3.style.display = "none";
}


window.onclick = function (event) {
  if (event.target == modal3) {
    modal3.style.display = "none";
  }
}
// POPUP 3 END

//   SLIDESHOW
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

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
    dots[i].className = dots[i].className.replace(" active2", "");
  }
  slides[slideIndex - 1].style.display = "block";
  dots[slideIndex - 1].className += " active2";
}
