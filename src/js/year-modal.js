const addYearBtn = document.querySelector('[data-add-button]')
const viewYearBtn = document.querySelectorAll('[data-view-button]')
const editYearBtn = document.querySelectorAll('[data-edit-button]')
const deleteYearBtn = document.querySelectorAll('[data-delete-button]')
const closeBtn = document.querySelectorAll('[data-close-button]')

const addYearModal = document.querySelector('#add-year-modal')
const viewYearModal = document.querySelector('#view-year-modal')
const editYearModal = document.querySelector('#edit-year-modal')
const deleteYearModal = document.querySelector('#delete-year-modal')

const inputFieldId = document.querySelectorAll('#id')
const inputFieldName = document.querySelectorAll('#name')

addYearBtn.addEventListener('click', () => {
  addYearModal.classList.remove('hidden')
  addYearModal.classList.add('flex')
})

viewYearBtn.forEach((btn) => {
  btn.addEventListener('click', () => {
    let id = btn.getAttribute('data-id')
    let name = btn.getAttribute('data-name')

    inputFieldId[0].value = id
    inputFieldName[0].value = name

    viewYearModal.classList.remove('hidden')
    viewYearModal.classList.add('flex')
  })
})

editYearBtn.forEach((btn) => {
  btn.addEventListener('click', () => {
    let id = btn.getAttribute('data-id')
    let name = btn.getAttribute('data-name')

    inputFieldId[1].value = id
    inputFieldName[1].value = name

    editYearModal.classList.remove('hidden')
    editYearModal.classList.add('flex')
  })
})

deleteYearBtn.forEach((btn) => {
  btn.addEventListener('click', () => {
    let id = btn.getAttribute('data-id')

    inputFieldId[2].value = id

    deleteYearModal.classList.remove('hidden')
    deleteYearModal.classList.add('flex')
  })
})

closeBtn.forEach((btn) => {
  btn.addEventListener('click', () => {
    addYearModal.classList.add('hidden')
    addYearModal.classList.remove('flex')
    viewYearModal.classList.add('hidden')
    viewYearModal.classList.remove('flex')
    editYearModal.classList.add('hidden')
    editYearModal.classList.remove('flex')
    deleteYearModal.classList.add('hidden')
    deleteYearModal.classList.remove('flex')
  })
})

addYearModal.classList.add('hidden')
addYearModal.classList.remove('flex')
viewYearModal.classList.add('hidden')
viewYearModal.classList.remove('flex')
editYearModal.classList.add('hidden')
editYearModal.classList.remove('flex')
deleteYearModal.classList.add('hidden')
deleteYearModal.classList.remove('flex')
