const editStudentGradesBtn = document.querySelectorAll('[data-edit-button]')
const closeBtn = document.querySelectorAll('[data-close-button]')

const editStudentGradesModal = document.querySelector('#edit-grade-modal')

const inputFieldStudentId = document.querySelector('#studentid')
const inputFieldName = document.querySelector('#name')
const inputFieldId = document.querySelector('#id')
const inputFieldFirst = document.querySelector('#first')
const inputFieldSecond = document.querySelector('#second')
const inputFieldThird = document.querySelector('#third')
const inputFieldFourth = document.querySelector('#fourth')
const inputFieldAvg = document.querySelector('#avg')
const inputFieldRemarks = document.querySelector('#remarks')

const computeAvg = (first, second, third, fourth) => {
  let avg = (first + second + third + fourth) / 4
  return avg
}

const computeRemarks = () => {
  let first = parseInt(inputFieldFirst.value) || 0
  let second = parseInt(inputFieldSecond.value) || 0
  let third = parseInt(inputFieldThird.value) || 0
  let fourth = parseInt(inputFieldFourth.value) || 0
  let avg = computeAvg(first, second, third, fourth)
  inputFieldAvg.value = avg

  if (
    first !== 0 &&
    second !== 0 &&
    third !== 0 &&
    fourth !== 0 &&
    inputFieldAvg.value < 75
  ) {
    inputFieldRemarks.value = 'Failed'
  } else if (inputFieldAvg.value >= 75) {
    inputFieldRemarks.value = 'Passed'
  } else {
    inputFieldRemarks.value = null
  }
}

inputFieldFirst.addEventListener('keyup', computeRemarks)
inputFieldSecond.addEventListener('keyup', computeRemarks)
inputFieldThird.addEventListener('keyup', computeRemarks)
inputFieldFourth.addEventListener('keyup', computeRemarks)

editStudentGradesBtn.forEach((btn) => {
  btn.addEventListener('click', () => {
    let studentId = btn.getAttribute('data-student-id')
    let name = btn.getAttribute('data-name')
    let id = btn.getAttribute('data-id')
    let first = btn.getAttribute('data-first')
    let second = btn.getAttribute('data-second')
    let third = btn.getAttribute('data-third')
    let fourth = btn.getAttribute('data-fourth')
    let avg = btn.getAttribute('data-avg')
    let remarks = btn.getAttribute('data-remarks')

    inputFieldStudentId.value = studentId
    inputFieldName.value = name
    inputFieldId.value = id
    inputFieldFirst.value = first
    inputFieldSecond.value = second
    inputFieldThird.value = third
    inputFieldFourth.value = fourth
    inputFieldAvg.value = avg
    inputFieldRemarks.value = remarks

    editStudentGradesModal.classList.remove('hidden')
    editStudentGradesModal.classList.add('flex')
  })
})

closeBtn.forEach((btn) => {
  btn.addEventListener('click', () => {
    editStudentGradesModal.classList.add('hidden')
    editStudentGradesModal.classList.remove('flex')
  })
})

editStudentGradesModal.classList.add('hidden')
editStudentGradesModal.classList.remove('flex')
