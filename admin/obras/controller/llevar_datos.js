const listElements = document.querySelectorAll('a');

listElements.forEach(listElement => {

    listElement.addEventListener('click', () => {
    
        

        window.location = "./editar_modificacion.php?titulo=" + listElement.textContent;
    })
})