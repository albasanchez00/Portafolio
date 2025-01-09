//Div que contiene los iconos
const containerIcons=document.getElementById("container-icons");

//Div que contiene los enlaces de menu.
const navLinks=document.getElementById("nav-links");

//Div que contiene los iconos hamburguesa.
const listIcon= document.getElementById("list-icon");
const closeIcon= document.getElementById("close-icon");

// Funcion para mostrar y ocultar los iconos al hacer clic ->
function mostrar_ocultar_nav(){
    navLinks.classList.toggle("nav-links--show");
    listIcon.classList.toggle("icon--hidden");
    closeIcon.classList.toggle("icon--show");
}

// Al hacer clic realiza la acción.
containerIcons.addEventListener("click", mostrar_ocultar_nav);

