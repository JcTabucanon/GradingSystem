const addStudentBtn = document.querySelector('[data-add-button]')
const viewStudentBtn = document.querySelectorAll('[data-view-button]')
const editStudentBtn = document.querySelectorAll('[data-edit-button]')
const deleteStudentBtn = document.querySelectorAll('[data-delete-button]')
const closeBtn = document.querySelectorAll('[data-close-button]')

const addStudentModal = document.querySelector('#add-student-modal')
const viewStudentModal = document.querySelector('#view-student-modal')
const editStudentModal = document.querySelector('#edit-student-modal')
const deleteStudentModal = document.querySelector('#delete-student-modal')

const inputFieldId = document.querySelectorAll('#id')
const inputFieldStudentNumber = document.querySelectorAll('#studentnumber')
const inputFieldFname = document.querySelectorAll('#firstname')
const inputFieldMname = document.querySelectorAll('#middlename')
const inputFieldLname = document.querySelectorAll('#lastname')
const inputFieldGender = document.querySelectorAll('#gender')
const inputFieldBday = document.querySelectorAll('#bday')
const inputFieldAge = document.querySelectorAll('#age')
const inputFieldStatus = document.querySelectorAll('#status')
const inputFieldNationality = document.querySelectorAll('#nationality')
const inputFieldReligion = document.querySelectorAll('#religion')
const inputFieldContact = document.querySelectorAll('#contact')
const inputFieldEmail = document.querySelectorAll('#email')
const inputFieldAddress1 = document.querySelectorAll('#address1')
const inputFieldAddress2 = document.querySelectorAll('#address2')

addStudentBtn.addEventListener('click', () => {
  addStudentModal.classList.remove('hidden')
  addStudentModal.classList.add('flex')
})

viewStudentBtn.forEach((btn) => {
  btn.addEventListener('click', () => {
    let number = btn.getAttribute('data-number')
    let fname = btn.getAttribute('data-fname')
    let mname = btn.getAttribute('data-mname')
    let lname = btn.getAttribute('data-lname')
    let gender = btn.getAttribute('data-gender')
    let bday = btn.getAttribute('data-bday')
    let age = btn.getAttribute('data-age')
    let status = btn.getAttribute('data-status')
    let nationality = btn.getAttribute('data-nationality')
    let religion = btn.getAttribute('data-religion')
    let contact = btn.getAttribute('data-contact')
    let email = btn.getAttribute('data-email')
    let address1 = btn.getAttribute('data-address1')
    let address2 = btn.getAttribute('data-address2')

    inputFieldStudentNumber[0].value = number
    inputFieldFname[0].value = fname
    inputFieldMname[0].value = mname
    inputFieldLname[0].value = lname
    inputFieldGender[0].value = gender
    inputFieldBday[0].value = bday
    inputFieldAge[0].value = age
    inputFieldStatus[0].value = status
    inputFieldNationality[0].value = nationality
    inputFieldReligion[0].value = religion
    inputFieldContact[0].value = contact
    inputFieldEmail[0].value = email
    inputFieldAddress1[0].value = address1
    inputFieldAddress2[0].value = address2

    viewStudentModal.classList.remove('hidden')
    viewStudentModal.classList.add('flex')
  })
})

editStudentBtn.forEach((btn) => {
  btn.addEventListener('click', () => {
    let id = btn.getAttribute('data-id')
    let number = btn.getAttribute('data-number')
    let fname = btn.getAttribute('data-fname')
    let mname = btn.getAttribute('data-mname')
    let lname = btn.getAttribute('data-lname')
    let gender = btn.getAttribute('data-gender')
    let bday = btn.getAttribute('data-bday')
    let age = btn.getAttribute('data-age')
    let status = btn.getAttribute('data-status')
    let nationality = btn.getAttribute('data-nationality')
    let religion = btn.getAttribute('data-religion')
    let contact = btn.getAttribute('data-contact')
    let email = btn.getAttribute('data-email')
    let address1 = btn.getAttribute('data-address1')
    let address2 = btn.getAttribute('data-address2')

    inputFieldId[0].value = id
    inputFieldStudentNumber[1].value = number
    inputFieldFname[1].value = fname
    inputFieldMname[1].value = mname
    inputFieldLname[1].value = lname
    inputFieldGender[1].value = gender
    inputFieldBday[1].value = bday
    inputFieldAge[1].value = age
    inputFieldStatus[1].value = status
    inputFieldNationality[1].value = nationality
    inputFieldReligion[1].value = religion
    inputFieldContact[1].value = contact
    inputFieldEmail[1].value = email
    inputFieldAddress1[1].value = address1
    inputFieldAddress2[1].value = address2

    editStudentModal.classList.remove('hidden')
    editStudentModal.classList.add('flex')
  })
})

deleteStudentBtn.forEach((btn) => {
  btn.addEventListener('click', () => {
    let id = btn.getAttribute('data-id')
    let number = btn.getAttribute('data-number')

    inputFieldId[1].value = id
    inputFieldStudentNumber[2].value = number

    deleteStudentModal.classList.remove('hidden')
    deleteStudentModal.classList.add('flex')
  })
})

closeBtn.forEach((btn) => {
  btn.addEventListener('click', () => {
    addStudentModal.classList.add('hidden')
    addStudentModal.classList.remove('flex')
    viewStudentModal.classList.add('hidden')
    viewStudentModal.classList.remove('flex')
    editStudentModal.classList.add('hidden')
    editStudentModal.classList.remove('flex')
    deleteStudentModal.classList.add('hidden')
    deleteStudentModal.classList.remove('flex')
  })
})

addStudentModal.classList.add('hidden')
addStudentModal.classList.remove('flex')
viewStudentModal.classList.add('hidden')
viewStudentModal.classList.remove('flex')
editStudentModal.classList.add('hidden')
editStudentModal.classList.remove('flex')
deleteStudentModal.classList.add('hidden')
deleteStudentModal.classList.remove('flex')
