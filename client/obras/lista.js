let listElements = document.querySelectorAll('.autor');

listElements.forEach(listElement => {

    listElement.addEventListener('click', () => {
        
        listElement.classList.toggle('arrow');

    })

})