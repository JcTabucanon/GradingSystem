const addDeptBtn = document.querySelector('[data-add-button]')
const viewDeptBtn = document.querySelectorAll('[data-view-button]')
const editDeptBtn = document.querySelectorAll('[data-edit-button]')
const deleteDeptBtn = document.querySelectorAll('[data-delete-button]')
const closeBtn = document.querySelectorAll('[data-close-button]')

const addDeptModal = document.querySelector('#add-dept-modal')
const viewDeptModal = document.querySelector('#view-dept-modal')
const editDeptModal = document.querySelector('#edit-dept-modal')
const deleteDeptModal = document.querySelector('#delete-dept-modal')

const inputFieldId = document.querySelectorAll('#id')
const inputFieldCode = document.querySelectorAll('#code')
const inputFieldName = document.querySelectorAll('#deptname')
const inputFieldDesc = document.querySelectorAll('#desc')

addDeptBtn.addEventListener('click', () => {
  addDeptModal.classList.remove('hidden')
  addDeptModal.classList.add('flex')
})

viewDeptBtn.forEach((btn) => {
  btn.addEventListener('click', () => {
    let code = btn.getAttribute('data-code')
    let name = btn.getAttribute('data-name')
    let desc = btn.getAttribute('data-desc')

    inputFieldCode[0].value = code
    inputFieldName[0].value = name
    inputFieldDesc[0].value = desc

    viewDeptModal.classList.remove('hidden')
    viewDeptModal.classList.add('flex')
  })
})

editDeptBtn.forEach((btn) => {
  btn.addEventListener('click', () => {
    let id = btn.getAttribute('data-id')
    let code = btn.getAttribute('data-code')
    let name = btn.getAttribute('data-name')
    let desc = btn.getAttribute('data-desc')

    inputFieldId[0].value = id
    inputFieldCode[1].value = code
    inputFieldName[1].value = name
    inputFieldDesc[1].value = desc

    editDeptModal.classList.remove('hidden')
    editDeptModal.classList.add('flex')
  })
})

deleteDeptBtn.forEach((btn) => {
  btn.addEventListener('click', () => {
    let id = btn.getAttribute('data-id')

    inputFieldId[1].value = id

    deleteDeptModal.classList.remove('hidden')
    deleteDeptModal.classList.add('flex')
  })
})

closeBtn.forEach((btn) => {
  btn.addEventListener('click', () => {
    addDeptModal.classList.add('hidden')
    addDeptModal.classList.remove('flex')
    viewDeptModal.classList.add('hidden')
    viewDeptModal.classList.remove('flex')
    editDeptModal.classList.add('hidden')
    editDeptModal.classList.remove('flex')
    deleteDeptModal.classList.add('hidden')
    deleteDeptModal.classList.remove('flex')
  })
})

addDeptModal.classList.add('hidden')
addDeptModal.classList.remove('flex')
viewDeptModal.classList.add('hidden')
viewDeptModal.classList.remove('flex')
editDeptModal.classList.add('hidden')
editDeptModal.classList.remove('flex')
deleteDeptModal.classList.add('hidden')
deleteDeptModal.classList.remove('flex')
