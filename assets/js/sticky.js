// When the user scrolls the page, execute myFunction
window.onscroll = function() {
    myFunction()
};

// take the id myheader as a variable
var header = document.getElementById("myhead");

// take the offset position of my navbar
var sticky = header.offsetTop;

// Add or remove the sticky class to my navbar when he is or isn't in position
function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  }
  else {
    header.classList.remove("sticky");
  }
}