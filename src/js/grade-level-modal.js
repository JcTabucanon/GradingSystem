const addGradeLevelBtn = document.querySelector('[data-add-button]')
const viewGradeLevelBtn = document.querySelectorAll('[data-view-button]')
const editGradeLevelBtn = document.querySelectorAll('[data-edit-button]')
const deleteGradeLevelBtn = document.querySelectorAll('[data-delete-button]')
const closeBtn = document.querySelectorAll('[data-close-button]')

const addGradeLevelModal = document.querySelector('#add-grade-level-modal')
const viewGradeLevelModal = document.querySelector('#view-grade-level-modal')
const editGradeLevelModal = document.querySelector('#edit-grade-level-modal')
const deleteGradeLevelModal = document.querySelector(
  '#delete-grade-level-modal'
)

const inputFieldId = document.querySelectorAll('#id')
const inputFieldCode = document.querySelectorAll('#code')
const inputFieldName = document.querySelectorAll('#name')
const inputFieldDesc = document.querySelectorAll('#desc')

addGradeLevelBtn.addEventListener('click', () => {
  addGradeLevelModal.classList.remove('hidden')
  addGradeLevelModal.classList.add('flex')
})

viewGradeLevelBtn.forEach((btn) => {
  btn.addEventListener('click', () => {
    let code = btn.getAttribute('data-code')
    let name = btn.getAttribute('data-name')
    let desc = btn.getAttribute('data-desc')

    inputFieldCode[0].value = code
    inputFieldName[0].value = name
    inputFieldDesc[0].value = desc

    viewGradeLevelModal.classList.remove('hidden')
    viewGradeLevelModal.classList.add('flex')
  })
})

editGradeLevelBtn.forEach((btn) => {
  btn.addEventListener('click', () => {
    let id = btn.getAttribute('data-id')
    let code = btn.getAttribute('data-code')
    let name = btn.getAttribute('data-name')
    let desc = btn.getAttribute('data-desc')

    inputFieldId[0].value = id
    inputFieldCode[1].value = code
    inputFieldName[1].value = name
    inputFieldDesc[1].value = desc

    editGradeLevelModal.classList.remove('hidden')
    editGradeLevelModal.classList.add('flex')
  })
})

deleteGradeLevelBtn.forEach((btn) => {
  btn.addEventListener('click', () => {
    let id = btn.getAttribute('data-id')

    inputFieldId[1].value = id

    deleteGradeLevelModal.classList.remove('hidden')
    deleteGradeLevelModal.classList.add('flex')
  })
})

closeBtn.forEach((btn) => {
  btn.addEventListener('click', () => {
    addGradeLevelModal.classList.add('hidden')
    addGradeLevelModal.classList.remove('flex')
    viewGradeLevelModal.classList.add('hidden')
    viewGradeLevelModal.classList.remove('flex')
    editGradeLevelModal.classList.add('hidden')
    editGradeLevelModal.classList.remove('flex')
    deleteGradeLevelModal.classList.add('hidden')
    deleteGradeLevelModal.classList.remove('flex')
  })
})

addGradeLevelModal.classList.add('hidden')
addGradeLevelModal.classList.remove('flex')
viewGradeLevelModal.classList.add('hidden')
viewGradeLevelModal.classList.remove('flex')
editGradeLevelModal.classList.add('hidden')
editGradeLevelModal.classList.remove('flex')
deleteGradeLevelModal.classList.add('hidden')
deleteGradeLevelModal.classList.remove('flex')
