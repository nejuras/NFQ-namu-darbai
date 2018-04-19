const axios = require('axios');

let name = document.getElementById('name');
let team = document.getElementById('team');
let validationResultName = document.getElementById('validation-result-name');
let validationResultTeam = document.getElementById('validation-result-team');
const validateName = function () {
    validationResultName.innerText = '...';
    axios.post(validationResultName.dataset.path, {input: name.value})
        .then(function(response) {

            if (response.data.valid) {
                validationResultName.innerText = ":)";
            } else {
                validationResultName.innerText = ":(";
            }
        })
        .catch(function (error) {
            validationResultName.innerText = 'Error: ' + error;
        });
};

name.onkeyup = validateName;
name.onchange = validateName;

const validateTeam = function () {
    validationResultTeam.innerText = '...';
    axios.post(validationResultTeam.dataset.path, {input: team.value})
        .then(function(response) {

            if (response.data.valid) {
                validationResultTeam.innerText = ":)";
            } else {
                validationResultTeam.innerText = ":(";
            }
        })
        .catch(function (error) {
            validationResultTeam.innerText = 'Error: ' + error;
        });
};

team.onkeyup = validateTeam;
team.onchange = validateTeam;