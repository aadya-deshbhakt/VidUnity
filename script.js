var menuIcon = document.querySelector(".menu-icon");
var sidebar = document.querySelector(".sidebar");
var container = document.querySelector(".container");

menuIcon.onclick = function(){
    sidebar.classList.toggle("moving-sidebar");
    container.classList.toggle("large-container");
}

var play_pause = document.querySelector(".play_pause");
var play_pause_button = document.querySelector(".play_pause_button");