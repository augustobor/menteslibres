
let listElements = document.querySelectorAll('.autor');
let listElementsCategoria = document.querySelectorAll('.categoria');
let listElementsObra = document.querySelectorAll('.obra');

listElements.forEach(listElement => {

    listElement.addEventListener('click', () => {
        
        classNameAutor = listElement.className;
        classNameCategoria = listElement.querySelectorAll('.categoria-arrow').className

        if(listElement.querySelectorAll('.categoria-arrow').length == 0) {
 
            listElement.classList.toggle('autor-arrow');
        
        } 
    })
})

listElementsCategoria.forEach(listElement => {
    
    listElement.addEventListener('click', () => {
        
        if (listElement.querySelectorAll('.obra-arrow').length == 0){

            listElement.classList.toggle('categoria-arrow');
    
        }
    })
})

listElementsObra.forEach(listElement => {

    listElement.addEventListener('click', () => {
    
        listElement.classList.toggle('obra-arrow');
        window.location = "./muestra.php?titulo=" + listElement.textContent;
    })
})