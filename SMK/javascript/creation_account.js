
let statute = document.getElementById('statutehidden').value;

let radioButtons = document.getElementsByClassName('statute');

for (let i = 0; i < radioButtons.length; i++){
    if (radioButtons[i].value === statute){
        radioButtons[i].checked = true;
    }
}