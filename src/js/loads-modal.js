const assignLoadsBtn = document.querySelector('[data-add-button]')
const unassignLoadsBtn = document.querySelectorAll('[data-delete-button]')
const closeBtn = document.querySelectorAll('[data-close-button]')

const assignLoadsModal = document.querySelector('#assign-load-modal')
const unassignLoadsModal = document.querySelector('#unassign-load-modal')

const inputFieldId = document.querySelector('#id')
const inputFieldCode = document.querySelector('#code')

assignLoadsBtn.addEventListener('click', () => {
  assignLoadsModal.classList.remove('hidden')
  assignLoadsModal.classList.add('flex')
})

unassignLoadsBtn.forEach((btn) => {
  btn.addEventListener('click', () => {
    let id = btn.getAttribute('data-id')
    let code = btn.getAttribute('data-code')

    inputFieldId.value = id
    inputFieldCode.value = code

    unassignLoadsModal.classList.remove('hidden')
    unassignLoadsModal.classList.add('flex')
  })
})

closeBtn.forEach((btn) => {
  btn.addEventListener('click', () => {
    assignLoadsModal.classList.add('hidden')
    assignLoadsModal.classList.remove('flex')
    unassignLoadsModal.classList.add('hidden')
    unassignLoadsModal.classList.remove('flex')
  })
})

assignLoadsModal.classList.add('hidden')
assignLoadsModal.classList.remove('flex')
unassignLoadsModal.classList.add('hidden')
unassignLoadsModal.classList.remove('flex')
