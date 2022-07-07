let haveSpouse = document.querySelector('#haveSpouse')
let dataSpouse = document.querySelector('.dataSpouse')

let haveDependents = document.querySelector('#haveDependents')
let dataDependents = document.querySelector('.dataDependents')

let haveFed = document.querySelector('#haveFed')
let dataFed = document.querySelector('.dataFed')

let haveMedicalExpenses = document.querySelector('#haveMedicalExpenses')
let dataMedicalExpenses = document.querySelector('.dataMedicalExpenses')

let haveEducationExpenses = document.querySelector('#haveEducationExpenses')
let dataEducationExpenses = document.querySelector('.dataEducationExpenses')

let havePatrimony = document.querySelector('#havePatrimony')
let typePatrimony = document.querySelector('.typePatrimony')



const setup = () => {
    haveSpouse.addEventListener('change', onChange)
    haveDependents.addEventListener('change', onChange)
    haveFed.addEventListener('change', onChange)
    haveMedicalExpenses.addEventListener('change', onChange)
    haveEducationExpenses.addEventListener('change', onChange)
    havePatrimony.addEventListener('change', onChange)
}

const onChange = (event) => {
    const target = event.target.value
    const targetId = event.target.id

    console.log();

    if (target == "sim") {

        switch (targetId) {
            case "haveSpouse":
                dataSpouse.classList.toggle('active')
                break;

            case "haveDependents":
                dataDependents.classList.toggle('active')
                break;

            case "haveFed":
                dataFed.classList.toggle('active')
                break;

            case "haveMedicalExpenses":
                dataMedicalExpenses.classList.toggle('active')
                break;

            case "haveEducationExpenses":
                dataEducationExpenses.classList.toggle('active')
                break;

            case "havePatrimony":
                typePatrimony.classList.toggle('active')
                break;

            default:
                break;
        }

    } else if (target == "não") {

        switch (targetId) {
            case "haveSpouse":
                dataSpouse.classList.remove('active')
                break;

            case "haveDependents":
                dataDependents.classList.remove('active')
                break;

            case "haveFed":
                dataFed.classList.remove('active')
                break;

            case "haveMedicalExpenses":
                dataMedicalExpenses.classList.remove('active')
                break;

            case "haveEducationExpenses":
                dataEducationExpenses.classList.remove('active')
                break;

            case "havePatrimony":
                typePatrimony.classList.remove('active')
                break;


            default:
                break;
        }
    }
}

window.addEventListener('load', setup)