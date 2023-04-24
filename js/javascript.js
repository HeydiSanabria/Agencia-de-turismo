let menu = document.querySelector('#menu-btn')
let navbar = document.querySelector('.header .navbar')

menu.onclick = () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
};
window.onscroll = () =>{
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
};

let verMasBtn = document.querySelector('.paquetes .ver-mas .btn');
let currentItem = 3;

verMasBtn.onclick = () =>{
    let boxes = [...document.querySelectorAll('.paquetes .box-container .box')]
    for (var i = currentItem; i < currentItem + 3; i++){
        boxes[i].style.display = 'inline-block';
    };
    currentItem += 3;
    if(currentItem >= boxes.length){
        verMasBtn.style.display = 'none';
    }
}