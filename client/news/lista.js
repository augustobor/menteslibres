
let listElements = document.querySelectorAll('.noticia');

listElements.forEach(listElement => {

    listElement.addEventListener('click', () => {
    
        window.location = "../muestra/muestra_news.php?titulo=" + listElement.textContent;
    })
})