const INPUT_ZIPCODE = document.getElementById('zipcode');
const INPUT_ADDRESS = document.getElementById('address');
const INPUT_NUMBER_HOUSE = document.getElementById('number_house');
const INPUT_DISTRICT = document.getElementById('district');
const INPUT_CITY = document.getElementById('city');
const INPUT_STATE = document.getElementById('state');

INPUT_ZIPCODE.addEventListener('blur', () => {
    let cep = INPUT_ZIPCODE.value;

    if (cep.length !== 8) {
        return;
    }

    fetch(`https://viacep.com.br/ws/${cep}/json/`)
        .then(response => response.json())
        .then(json => {
            INPUT_ADDRESS.value = json.logradouro;
            INPUT_DISTRICT.value = json.bairro;
            INPUT_CITY.value = json.localidade;
            INPUT_STATE.value = json.uf;

            INPUT_NUMBER_HOUSE.focus();

        });
})