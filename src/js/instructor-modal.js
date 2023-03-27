const addInstructorBtn = document.querySelector('[data-add-button]')
const viewInstructorBtn = document.querySelectorAll('[data-view-button]')
const editInstructorBtn = document.querySelectorAll('[data-edit-button]')
const deleteInstructorBtn = document.querySelectorAll('[data-delete-button]')
const closeBtn = document.querySelectorAll('[data-close-button]')

const addInstructorModal = document.querySelector('#add-instructor-modal')
const viewInstructorModal = document.querySelector('#view-instructor-modal')
const editInstructorModal = document.querySelector('#edit-instructor-modal')
const deleteInstructorModal = document.querySelector('#delete-instructor-modal')

const inputFieldId = document.querySelectorAll('#id')
const inputFieldCode = document.querySelectorAll('#code')
const inputFieldName = document.querySelectorAll('#name')
const inputFieldAddress = document.querySelectorAll('#address')
const inputFieldGender = document.querySelectorAll('#gender')
const inputFieldStatus = document.querySelectorAll('#status')
const inputFieldEmail = document.querySelectorAll('#email')
const inputFieldEmpStatus = document.querySelectorAll('#empstatus')

addInstructorBtn.addEventListener('click', () => {
  addInstructorModal.classList.remove('hidden')
  addInstructorModal.classList.add('flex')
})

viewInstructorBtn.forEach((btn) => {
  btn.addEventListener('click', () => {
    let code = btn.getAttribute('data-code')
    let name = btn.getAttribute('data-name')
    let address = btn.getAttribute('data-address')
    let gender = btn.getAttribute('data-gender')
    let status = btn.getAttribute('data-status')
    let email = btn.getAttribute('data-email')
    let empstatus = btn.getAttribute('data-empstatus')

    inputFieldCode[0].value = code
    inputFieldName[0].value = name
    inputFieldAddress[0].value = address
    inputFieldGender[0].value = gender
    inputFieldStatus[0].value = status
    inputFieldEmail[0].value = email
    inputFieldEmpStatus[0].value = empstatus

    viewInstructorModal.classList.remove('hidden')
    viewInstructorModal.classList.add('flex')
  })
})

editInstructorBtn.forEach((btn) => {
  btn.addEventListener('click', () => {
    let id = btn.getAttribute('data-id')
    let code = btn.getAttribute('data-code')
    let name = btn.getAttribute('data-name')
    let address = btn.getAttribute('data-address')
    let gender = btn.getAttribute('data-gender')
    let status = btn.getAttribute('data-status')
    let email = btn.getAttribute('data-email')
    let empstatus = btn.getAttribute('data-empstatus')

    inputFieldId[0].value = id
    inputFieldCode[1].value = code
    inputFieldName[1].value = name
    inputFieldAddress[1].value = address
    inputFieldGender[1].value = gender
    inputFieldStatus[1].value = status
    inputFieldEmail[1].value = email
    inputFieldEmpStatus[1].value = empstatus

    editInstructorModal.classList.remove('hidden')
    editInstructorModal.classList.add('flex')
  })
})

deleteInstructorBtn.forEach((btn) => {
  btn.addEventListener('click', () => {
    let id = btn.getAttribute('data-id')

    inputFieldId[1].value = id

    deleteInstructorModal.classList.remove('hidden')
    deleteInstructorModal.classList.add('flex')
  })
})

closeBtn.forEach((btn) => {
  btn.addEventListener('click', () => {
    addInstructorModal.classList.add('hidden')
    addInstructorModal.classList.remove('flex')
    viewInstructorModal.classList.add('hidden')
    viewInstructorModal.classList.remove('flex')
    editInstructorModal.classList.add('hidden')
    editInstructorModal.classList.remove('flex')
    deleteInstructorModal.classList.add('hidden')
    deleteInstructorModal.classList.remove('flex')
  })
})

addInstructorModal.classList.add('hidden')
addInstructorModal.classList.remove('flex')
viewInstructorModal.classList.add('hidden')
viewInstructorModal.classList.remove('flex')
editInstructorModal.classList.add('hidden')
editInstructorModal.classList.remove('flex')
deleteInstructorModal.classList.add('hidden')
deleteInstructorModal.classList.remove('flex')
