const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))


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
let dataPatrimony = document.querySelector('.dataPatrimony')

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
                dataPatrimony.classList.toggle('active')
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
                dataPatrimony.classList.remove('active')
                break;


            default:
                break;
        }
    }
}

window.addEventListener('load', setup)


// ==========================================================

// window.onload = function() { alert("Está carregado!") }



// window.onload = function() {

//     var haveValues = {
//         haveSpouse: haveSpouse.value,
//         haveDependents: haveDependents.value,
//         haveFed: haveFed.value,
//         haveMedicalExpenses: haveMedicalExpenses.value,
//         haveEducationExpenses: haveEducationExpenses.value,
//         havePatrimony: havePatrimony.value
//     };

//     switch (haveValues) {

//         case haveValues.haveSpouse == "sim":
//             dataSpouse.classList.toggle('active')


//         case haveValues.haveMedicalExpenses == "sim":
//             dataMedicalExpenses.classList.toggle('active')

//             console.log(haveMedicalExpenses.value);


//         default:
//             break;
//     }


//     console.log();
// }