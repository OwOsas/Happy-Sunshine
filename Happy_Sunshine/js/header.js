// burger menu

var burger = document.getElementById("burger_menu");
var menu = document.getElementById("mobile_menu");



console.log(menu);

burger.addEventListener("click",function(){
    console.log("burger clicked");
    burger.classList.toggle("active");
    menu.classList.toggle("active");

},false);

console.log('This is header js');

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 50) {
    document.getElementById("header_container").classList.add("header_shrink");
  } else {
    document.getElementById("header_container").classList.remove("header_shrink");
  }
}