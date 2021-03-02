// JavaScript Document

// script-sticky--navbar

window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
    $("#navbar").css("z-index", "1");
  } else {
    navbar.classList.remove("sticky");
  }
}
// --------------------------------
$(function(){
  $(".dv-title h1").fadeIn()
  .css({top:290, right: 500, position:'absolute'})
  .animate({top:90, right: 500}, 800, function() {
    //callback
  });
});