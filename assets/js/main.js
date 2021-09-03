/* MENU SHOW & HIDDEN */
const navMenu = document.getElementById('nav-menu'),
    navToggle = document.getElementById('nav-toggle'),
    navClose = document.getElementById('nav-close')

    /* MENU SHOW */
    /* Validar se a constante existe */
    if (navToggle) {
        navToggle.addEventListener('click',() =>{
            navMenu.classList.add('show-menu')
        })
    }

    /* MENU HIDDEN */
    /* Validar se a constante existe */
    if(navClose){
        navClose.addEventListener('click',() =>{
            navMenu.classList.remove('show-menu')
        })
    }

    /* REMOVER MENU MOBILE */
    
    const navLink = document.querySelectorAll('.nav__link')

    function linkAction(){
        const navMenu = document.getElementById('nav-menu')
        // Esconder menu quando clica em algum link
        navMenu.classList.remove('show-menu')
    }
    navLink.forEach(n => n.addEventListener('click', linkAction))

    /*  */