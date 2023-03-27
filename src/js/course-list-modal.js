const assignSubjectListBtn = document.querySelector('[data-add-button]')
const unassignSubjectListBtn = document.querySelectorAll('[data-delete-button]')
const closeBtn = document.querySelectorAll('[data-close-button]')

const assignSubjectListModal = document.querySelector('#assign-subject-modal')
const unassignSubjectListModal = document.querySelector(
  '#unassign-subject-modal'
)

const inputFieldId = document.querySelector('#id')
const inputFieldCode = document.querySelector('#code')

assignSubjectListBtn.addEventListener('click', () => {
  assignSubjectListModal.classList.remove('hidden')
  assignSubjectListModal.classList.add('flex')
})

unassignSubjectListBtn.forEach((btn) => {
  btn.addEventListener('click', () => {
    let id = btn.getAttribute('data-id')

    inputFieldId.value = id

    unassignSubjectListModal.classList.remove('hidden')
    unassignSubjectListModal.classList.add('flex')
  })
})

closeBtn.forEach((btn) => {
  btn.addEventListener('click', () => {
    assignSubjectListModal.classList.add('hidden')
    assignSubjectListModal.classList.remove('flex')
    unassignSubjectListModal.classList.add('hidden')
    unassignSubjectListModal.classList.remove('flex')
  })
})

assignSubjectListModal.classList.add('hidden')
assignSubjectListModal.classList.remove('flex')
unassignSubjectListModal.classList.add('hidden')
unassignSubjectListModal.classList.remove('flex')
