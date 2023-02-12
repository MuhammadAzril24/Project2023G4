let menu = document.queruSelector("#menu-icon");
let navbar = document.queruSelector(".navbar");

menu.addEventListener("click", function() {
  navbar.classList.toggle("active");
});

window.onscroll = () => {
  navbar.classList.remove("active");
};

$('h3 span:first-child').after("<span class=\"dots\"> </span>");