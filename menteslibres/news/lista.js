
let listElements = document.querySelectorAll('.noticia');

listElements.forEach(listElement => {

    const titulo = listElement.querySelector('h2')
    listElement.addEventListener('click', () => {
        window.location = "./muestra_news.php?titulo=" + titulo.textContent;
    })
})