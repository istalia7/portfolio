// Récupération de l'icone dans la barre de navigation
let menu = document.querySelector(".fa-bars");
let navbar = document.querySelector(".liste_navbar");
// Fonction click sur l'icone
menu.addEventListener("click", function () {
  navbar.classList.toggle("appear");
});



