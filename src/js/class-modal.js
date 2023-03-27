const viewClassBtn = document.querySelectorAll('[data-view-button]')
const editClassBtn = document.querySelectorAll('[data-edit-button]')
const closeBtn = document.querySelectorAll('[data-close-button]')

const viewClassModal = document.querySelector('#view-class-modal')
const editClassModal = document.querySelector('#edit-class-modal')

const inputFieldId = document.querySelector('#id')
const inputFieldName = document.querySelectorAll('#name')
const inputFieldDesc = document.querySelectorAll('#desc')
const inputFieldInstructor = document.querySelectorAll('#inst')
const inputFieldLevel = document.querySelectorAll('#level')
const inputFieldDay = document.querySelectorAll('#day')
const inputFieldTime = document.querySelectorAll('#time')
const inputFieldRoom = document.querySelectorAll('#room')
const inputFieldSection = document.querySelectorAll('#section')

viewClassBtn.forEach((btn) => {
  btn.addEventListener('click', () => {
    let name = btn.getAttribute('data-name')
    let desc = btn.getAttribute('data-desc')
    let inst = btn.getAttribute('data-inst')
    let level = btn.getAttribute('data-level')
    let day = btn.getAttribute('data-day')
    let time = btn.getAttribute('data-time')
    let room = btn.getAttribute('data-room')
    let section = btn.getAttribute('data-section')

    inputFieldName[0].value = name
    inputFieldDesc[0].value = desc
    inputFieldInstructor[0].value = inst
    inputFieldLevel[0].value = level
    inputFieldDay[0].value = day
    inputFieldTime[0].value = time
    inputFieldRoom[0].value = room
    inputFieldSection[0].value = section

    viewClassModal.classList.remove('hidden')
    viewClassModal.classList.add('flex')
  })
})

editClassBtn.forEach((btn) => {
  btn.addEventListener('click', () => {
    let id = btn.getAttribute('data-id')
    let name = btn.getAttribute('data-name')
    let desc = btn.getAttribute('data-desc')
    let inst = btn.getAttribute('data-inst')
    let level = btn.getAttribute('data-level')
    let day = btn.getAttribute('data-day')
    let time = btn.getAttribute('data-time')
    let room = btn.getAttribute('data-room')
    let section = btn.getAttribute('data-section')

    inputFieldId.value = id
    inputFieldName[1].value = name
    inputFieldDesc[1].value = desc
    inputFieldInstructor[1].value = inst
    inputFieldLevel[1].value = level
    inputFieldDay[1].value = day
    inputFieldTime[1].value = time
    inputFieldRoom[1].value = room
    inputFieldSection[1].value = section

    editClassModal.classList.remove('hidden')
    editClassModal.classList.add('flex')
  })
})

closeBtn.forEach((btn) => {
  btn.addEventListener('click', () => {
    viewClassModal.classList.add('hidden')
    viewClassModal.classList.remove('flex')
    editClassModal.classList.add('hidden')
    editClassModal.classList.remove('flex')
  })
})

viewClassModal.classList.add('hidden')
viewClassModal.classList.remove('flex')
editClassModal.classList.add('hidden')
editClassModal.classList.remove('flex')
