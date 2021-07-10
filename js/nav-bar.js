const hamburger = document.querySelector('.header .nav-bar .nav-list .hamburger');
const mobile_menu = document.querySelector('.header .nav-bar .nav-list .ul');
const menu_item = document.querySelectorAll('.header .nav-bar .nav-list .ul li a');
const header = document.querySelector('.header.container-header');
const upper = document.querySelector('.upper-hdr')

hamburger.addEventListener('click',() => {
    hamburger.classList.toggle('active');
    mobile_menu.classList.toggle('active');
});

document.addEventListener('scroll', () => {
    var scroll_position = window.scrollY;
    if (scroll_position > 100){
        header.style.backgroundColor = "#282f35";
        header.style.top = '0';
    } else{
        header.style.backgroundColor = "transparent";
        header.style.top = '50px';
    }
});

document.addEventListener('scroll', () => {
    var scroll_position = window.scrollY;
    if (scroll_position > 100){
        upper.style.display = "none";
    } else{
        upper.style.display = "block";
    }
});

menu_item.forEach(item => {
    item.addEventListener('click', ()=>{
        hamburger.classList.toggle('active');
        mobile_menu.classList.toggle('active');
    });
});