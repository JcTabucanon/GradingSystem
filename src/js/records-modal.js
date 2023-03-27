const addRecordsBtn = document.querySelector('[data-add-button]')
const viewRecordsBtn = document.querySelectorAll('[data-view-button]')
const editRecordsBtn = document.querySelectorAll('[data-edit-button]')
const deleteRecordsBtn = document.querySelectorAll('[data-delete-button]')
const closeBtn = document.querySelectorAll('[data-close-button]')

const addRecordsModal = document.querySelector('#add-record-modal')
const viewRecordsModal = document.querySelector('#view-record-modal')
const editRecordsModal = document.querySelector('#edit-record-modal')
const deleteRecordsModal = document.querySelector('#delete-record-modal')

const inputFieldId = document.querySelectorAll('#id')
const inputFieldStatus = document.querySelectorAll('#status')
const inputFieldLevel = document.querySelectorAll('#level')
const inputFieldYear = document.querySelectorAll('#year')
const inputFieldDate = document.querySelectorAll('#date')

addRecordsBtn.addEventListener('click', () => {
  addRecordsModal.classList.remove('hidden')
  addRecordsModal.classList.add('flex')
})

viewRecordsBtn.forEach((btn) => {
  btn.addEventListener('click', () => {
    let id = btn.getAttribute('data-id')
    let status = btn.getAttribute('data-status')
    let level = btn.getAttribute('data-level')
    let year = btn.getAttribute('data-year')
    let date = btn.getAttribute('data-date')

    inputFieldStatus[0].value = status
    inputFieldLevel[0].value = level
    inputFieldYear[0].value = year
    inputFieldDate[0].value = date

    viewRecordsModal.classList.remove('hidden')
    viewRecordsModal.classList.add('flex')
  })
})

editRecordsBtn.forEach((btn) => {
  btn.addEventListener('click', () => {
    let id = btn.getAttribute('data-id')
    let status = btn.getAttribute('data-status')
    let level = btn.getAttribute('data-level')
    let year = btn.getAttribute('data-year')
    let date = btn.getAttribute('data-date')

    inputFieldId[0].value = id
    inputFieldStatus[1].value = status
    inputFieldLevel[1].value = level
    inputFieldYear[1].value = year
    inputFieldDate[1].value = date

    editRecordsModal.classList.remove('hidden')
    editRecordsModal.classList.add('flex')
  })
})

deleteRecordsBtn.forEach((btn) => {
  btn.addEventListener('click', () => {
    let id = btn.getAttribute('data-id')

    inputFieldId[1].value = id

    deleteRecordsModal.classList.remove('hidden')
    deleteRecordsModal.classList.add('flex')
  })
})

closeBtn.forEach((btn) => {
  btn.addEventListener('click', () => {
    addRecordsModal.classList.add('hidden')
    addRecordsModal.classList.remove('flex')
    viewRecordsModal.classList.add('hidden')
    viewRecordsModal.classList.remove('flex')
    editRecordsModal.classList.add('hidden')
    editRecordsModal.classList.remove('flex')
    deleteRecordsModal.classList.add('hidden')
    deleteRecordsModal.classList.remove('flex')
  })
})

addRecordsModal.classList.add('hidden')
addRecordsModal.classList.remove('flex')
viewRecordsModal.classList.add('hidden')
viewRecordsModal.classList.remove('flex')
editRecordsModal.classList.add('hidden')
editRecordsModal.classList.remove('flex')
deleteRecordsModal.classList.add('hidden')
deleteRecordsModal.classList.remove('flex')
