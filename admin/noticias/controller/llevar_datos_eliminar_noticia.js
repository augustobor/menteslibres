const listElements = document.querySelectorAll('tr');

listElements.forEach(listElement => {

    listElement.addEventListener('click', () => {
        
        if(confirm('¿Está seguro de eliminar la noticia N°' + listElement.querySelector('td').textContent + '?'))
        {
            window.location = "./sql/eliminar_noticia_edicion.php?titulo=" + listElement.querySelector('td').textContent;
        }    
    })
})
