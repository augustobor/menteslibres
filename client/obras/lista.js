let listElements = document.querySelectorAll('.autor');

listElements.forEach(listElement => {

    listElement.addEventListener('click', () => {
        
        listElement.classList.toggle('arrow');

    })

})

let listElementsObra = document.querySelectorAll('.obra');

listElementsObra.forEach(listElement => {

    listElement.addEventListener('click', () => {
    
        window.location = "../muestra/muestra.php?titulo=" + listElement.textContent;
    })
})