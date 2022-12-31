const menuIcon = document.querySelector('#menuIcon')
const body = document.querySelector('body')
menu = document.querySelector('#menu-content')

menuIcon.addEventListener('click', (e) => {

    menu.classList.toggle('activate');

    const route = e.target.getAttribute('src');

    if(route == "../assets/burger-menu.svg") {
        e.target.setAttribute('src', "../assets/burger-menu-clear.svg")
    } else {
        e.target.setAttribute('src', "../assets/burger-menu.svg")
    }
})
