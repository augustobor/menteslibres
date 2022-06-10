const listElements = document.querySelectorAll('tr');

listElements.forEach(listElement => {

    listElement.addEventListener('click', () => {
        
        window.location = "./modificar_obra_edicion.php?titulo=" + listElement.querySelector('td').textContent;
        
    })
})