const addUserBtn = document.querySelector('[data-add-button]')
const viewUserBtn = document.querySelectorAll('[data-view-button]')
const editUserBtn = document.querySelectorAll('[data-edit-button]')
const deleteUserBtn = document.querySelectorAll('[data-delete-button]')
const closeBtn = document.querySelectorAll('[data-close-button]')

const addUserModal = document.querySelector('#add-user-modal')
const viewUserModal = document.querySelector('#view-user-modal')
const editUserModal = document.querySelector('#edit-user-modal')
const deleteUserModal = document.querySelector('#delete-user-modal')

const inputFieldId = document.querySelectorAll('#id')
const inputFieldFname = document.querySelectorAll('#firstname')
const inputFieldLname = document.querySelectorAll('#lastname')
const inputFieldEmail = document.querySelectorAll('#email')
const inputFieldUsername = document.querySelectorAll('#username')
const inputFieldAccountType = document.querySelectorAll('#accounttype')

addUserBtn.addEventListener('click', () => {
  addUserModal.classList.remove('hidden')
  addUserModal.classList.add('flex')
})

viewUserBtn.forEach((btn) => {
  btn.addEventListener('click', () => {
    let fname = btn.getAttribute('data-fname')
    let lname = btn.getAttribute('data-lname')
    let email = btn.getAttribute('data-email')
    let username = btn.getAttribute('data-username')
    let accountType = btn.getAttribute('data-type')

    inputFieldFname[0].value = fname
    inputFieldLname[0].value = lname
    inputFieldEmail[0].value = email
    inputFieldUsername[0].value = username
    inputFieldAccountType[0].value = accountType

    viewUserModal.classList.remove('hidden')
    viewUserModal.classList.add('flex')
  })
})

editUserBtn.forEach((btn) => {
  btn.addEventListener('click', () => {
    let id = btn.getAttribute('data-id')
    let fname = btn.getAttribute('data-fname')
    let lname = btn.getAttribute('data-lname')
    let email = btn.getAttribute('data-email')
    let username = btn.getAttribute('data-username')
    let accountType = btn.getAttribute('data-type')

    inputFieldId[0].value = id
    inputFieldFname[1].value = fname
    inputFieldLname[1].value = lname
    inputFieldEmail[1].value = email
    inputFieldUsername[1].value = username
    inputFieldAccountType[1].value = accountType

    editUserModal.classList.remove('hidden')
    editUserModal.classList.add('flex')
  })
})

deleteUserBtn.forEach((btn) => {
  btn.addEventListener('click', () => {
    let id = btn.getAttribute('data-id')

    inputFieldId[1].value = id

    deleteUserModal.classList.remove('hidden')
    deleteUserModal.classList.add('flex')
  })
})

closeBtn.forEach((btn) => {
  btn.addEventListener('click', () => {
    addUserModal.classList.add('hidden')
    addUserModal.classList.remove('flex')
    viewUserModal.classList.add('hidden')
    viewUserModal.classList.remove('flex')
    editUserModal.classList.add('hidden')
    editUserModal.classList.remove('flex')
    deleteUserModal.classList.add('hidden')
    deleteUserModal.classList.remove('flex')
  })
})

addUserModal.classList.add('hidden')
addUserModal.classList.remove('flex')
viewUserModal.classList.add('hidden')
viewUserModal.classList.remove('flex')
editUserModal.classList.add('hidden')
editUserModal.classList.remove('flex')
deleteUserModal.classList.add('hidden')
deleteUserModal.classList.remove('flex')
