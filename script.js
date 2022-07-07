// const tooltips = document.querySelectorAll('.tt')

// tooltips.forEach(t => {
//     new bootstrap.Tooltip(t)
// })

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






let addPatrimony = document.getElementById('addPatrimony');
let contenido = document.getElementById('containerPatrimony');

let boton_enviar = document.querySelector('#enviar_contacto')

addPatrimony.addEventListener('click', e => {
    e.preventDefault();
    let clonado = document.querySelector('.clone');
    let clon = clonado.cloneNode(true);

    contenido.appendChild(clon).classList.remove('clone');

    let remover_ocutar = contenido.lastChild.childNodes[1].querySelectorAll('span');
    remover_ocutar[0].classList.remove('hide');
});

contenido.addEventListener('click', e => {
    e.preventDefault();
    if (e.target.classList.contains('pointer')) {
        let containerPatrimony = e.target.parentNode.parentNode;

        containerPatrimony.parentNode.removeChild(containerPatrimony);
    }
});


boton_enviar.addEventListener('click', e => {
    e.preventDefault();

    const formulario = document.querySelector('#form_contacto');
    const form = new FormData(formulario);

    const peticion = {
        body: form,
        method: 'POST'
    };

    fetch('php/inserta-contacto.php', peticion)
        .then(res => res.json())
        .then(res => {
            if (res['respuesta']) {
                alert(res['mensaje']);
                formulario.reset();
            } else {
                alert(res['mensaje']);
            }

        });


});