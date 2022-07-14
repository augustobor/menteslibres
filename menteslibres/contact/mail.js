const form = document.querySelector('#form')
const mailButton = document.querySelector('#mail-button')

form.addEventListener('submit' , handleSubmit)


function handleSubmit(event) {
    event.preventDefault()
    const newForm = new FormData(this)
    console.log(newForm.get('name'))
    mailButton.setAttribute('href', `mailto:menteslibres.pabellonliterario@gmail.com?subject=${newForm.get('matter')}&body=${newForm.get('message')}`)
    mailButton.click()
}