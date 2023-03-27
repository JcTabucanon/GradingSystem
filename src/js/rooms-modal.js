const addRoomsBtn = document.querySelector('[data-add-button]')
const viewRoomsBtn = document.querySelectorAll('[data-view-button]')
const editRoomsBtn = document.querySelectorAll('[data-edit-button]')
const deleteRoomsBtn = document.querySelectorAll('[data-delete-button]')
const closeBtn = document.querySelectorAll('[data-close-button]')

const addRoomsModal = document.querySelector('#add-room-modal')
const viewRoomsModal = document.querySelector('#view-room-modal')
const editRoomsModal = document.querySelector('#edit-room-modal')
const deleteRoomsModal = document.querySelector('#delete-room-modal')

const inputFieldId = document.querySelectorAll('#id')
const inputFieldCode = document.querySelectorAll('#code')
const inputFieldName = document.querySelectorAll('#name')
const inputFieldDesc = document.querySelectorAll('#desc')

addRoomsModal.classList.add('hidden')
addRoomsModal.classList.remove('flex')
viewRoomsModal.classList.add('hidden')
viewRoomsModal.classList.remove('flex')
editRoomsModal.classList.add('hidden')
editRoomsModal.classList.remove('flex')
deleteRoomsModal.classList.add('hidden')
deleteRoomsModal.classList.remove('flex')

addRoomsBtn.addEventListener('click', () => {
  addRoomsModal.classList.remove('hidden')
  addRoomsModal.classList.add('flex')
})

viewRoomsBtn.forEach((btn) => {
  btn.addEventListener('click', () => {
    let code = btn.getAttribute('data-code')
    let name = btn.getAttribute('data-name')
    let desc = btn.getAttribute('data-desc')

    inputFieldCode[0].value = code
    inputFieldName[0].value = name
    inputFieldDesc[0].value = desc

    viewRoomsModal.classList.remove('hidden')
    viewRoomsModal.classList.add('flex')
  })
})

editRoomsBtn.forEach((btn) => {
  btn.addEventListener('click', () => {
    let id = btn.getAttribute('data-id')
    let code = btn.getAttribute('data-code')
    let name = btn.getAttribute('data-name')
    let desc = btn.getAttribute('data-desc')

    inputFieldId[0].value = id
    inputFieldCode[1].value = code
    inputFieldName[1].value = name
    inputFieldDesc[1].value = desc

    editRoomsModal.classList.remove('hidden')
    editRoomsModal.classList.add('flex')
  })
})

deleteRoomsBtn.forEach((btn) => {
  btn.addEventListener('click', () => {
    let id = btn.getAttribute('data-id')

    inputFieldId[1].value = id

    deleteRoomsModal.classList.remove('hidden')
    deleteRoomsModal.classList.add('flex')
  })
})

closeBtn.forEach((btn) => {
  btn.addEventListener('click', () => {
    addRoomsModal.classList.add('hidden')
    addRoomsModal.classList.remove('flex')
    viewRoomsModal.classList.add('hidden')
    viewRoomsModal.classList.remove('flex')
    editRoomsModal.classList.add('hidden')
    editRoomsModal.classList.remove('flex')
    deleteRoomsModal.classList.add('hidden')
    deleteRoomsModal.classList.remove('flex')
  })
})
