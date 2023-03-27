const addSubjectsBtn = document.querySelector('[data-add-button]')
const viewSubjectsBtn = document.querySelectorAll('[data-view-button]')
const editSubjectsBtn = document.querySelectorAll('[data-edit-button]')
const deleteSubjectsBtn = document.querySelectorAll('[data-delete-button]')
const closeBtn = document.querySelectorAll('[data-close-button]')

const addSubjectsModal = document.querySelector('#add-subject-modal')
const viewSubjectsModal = document.querySelector('#view-subject-modal')
const editSubjectsModal = document.querySelector('#edit-subject-modal')
const deleteSubjectsModal = document.querySelector('#delete-subject-modal')

const inputFieldId = document.querySelectorAll('#id')
const inputFieldCode = document.querySelectorAll('#code')
const inputFieldName = document.querySelectorAll('#name')
const inputFieldDesc = document.querySelectorAll('#desc')
const inputFieldLevel = document.querySelectorAll('#level')
const inputFieldUnit = document.querySelectorAll('#unit')
const inputFieldAy = document.querySelectorAll('#ay')
const inputFieldSem = document.querySelectorAll('#sem')

addSubjectsBtn.addEventListener('click', () => {
  addSubjectsModal.classList.remove('hidden')
  addSubjectsModal.classList.add('flex')
})

viewSubjectsBtn.forEach((btn) => {
  btn.addEventListener('click', () => {
    let code = btn.getAttribute('data-code')
    let name = btn.getAttribute('data-name')
    let desc = btn.getAttribute('data-desc')
    let level = btn.getAttribute('data-level')
    let unit = btn.getAttribute('data-unit')
    let ay = btn.getAttribute('data-ay')
    let sem = btn.getAttribute('data-sem')

    inputFieldCode[0].value = code
    inputFieldName[0].value = name
    inputFieldDesc[0].value = desc
    inputFieldLevel[0].value = level
    inputFieldUnit[0].value = unit
    inputFieldAy[0].value = ay
    inputFieldSem[0].value = sem

    viewSubjectsModal.classList.remove('hidden')
    viewSubjectsModal.classList.add('flex')
  })
})

editSubjectsBtn.forEach((btn) => {
  btn.addEventListener('click', () => {
    let id = btn.getAttribute('data-id')
    let code = btn.getAttribute('data-code')
    let name = btn.getAttribute('data-name')
    let desc = btn.getAttribute('data-desc')
    let level = btn.getAttribute('data-level')
    let unit = btn.getAttribute('data-unit')
    let ay = btn.getAttribute('data-ay')
    let sem = btn.getAttribute('data-sem')

    inputFieldId[0].value = id
    inputFieldCode[1].value = code
    inputFieldName[1].value = name
    inputFieldDesc[1].value = desc
    inputFieldLevel[1].value = level
    inputFieldUnit[1].value = unit
    inputFieldAy[1].value = ay
    inputFieldSem[1].value = sem

    editSubjectsModal.classList.remove('hidden')
    editSubjectsModal.classList.add('flex')
  })
})

deleteSubjectsBtn.forEach((btn) => {
  btn.addEventListener('click', () => {
    let id = btn.getAttribute('data-id')
    let code = btn.getAttribute('data-code')

    inputFieldId[1].value = id
    inputFieldCode[2].value = code

    deleteSubjectsModal.classList.remove('hidden')
    deleteSubjectsModal.classList.add('flex')
  })
})

closeBtn.forEach((btn) => {
  btn.addEventListener('click', () => {
    addSubjectsModal.classList.add('hidden')
    addSubjectsModal.classList.remove('flex')
    viewSubjectsModal.classList.add('hidden')
    viewSubjectsModal.classList.remove('flex')
    editSubjectsModal.classList.add('hidden')
    editSubjectsModal.classList.remove('flex')
    deleteSubjectsModal.classList.add('hidden')
    deleteSubjectsModal.classList.remove('flex')
  })
})

addSubjectsModal.classList.add('hidden')
addSubjectsModal.classList.remove('flex')
viewSubjectsModal.classList.add('hidden')
viewSubjectsModal.classList.remove('flex')
editSubjectsModal.classList.add('hidden')
editSubjectsModal.classList.remove('flex')
deleteSubjectsModal.classList.add('hidden')
deleteSubjectsModal.classList.remove('flex')
