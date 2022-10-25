// Boutons supprimer
let deleteButtons = document.getElementsByClassName('delete_user'); //Premier bouton
let nButtons = deleteButtons.length;

let deleteConfirmationBlock = document.getElementsByClassName('delete_confirmation_block'); //Bouton de confirmation

for (let i = 0; i < nButtons; i++) {
    deleteButtons[i].addEventListener('click', function(event){
        
        event.preventDefault();
        deleteConfirmationBlock[i].style.display = 'block';

    });

 }

 let annulDelButton = document.getElementsByClassName('annul_deleting'); //Premier bouton

 for (let i = 0; i < nButtons; i++) {
     annulDelButton[i].addEventListener('click', function(event){
         
         event.preventDefault();
         deleteConfirmationBlock[i].style.display = 'none';
 
     });
 
  }    

//====================================================================================================================================
//Boutons modifier
let updateButtons = document.getElementsByClassName('update_user'); //Premier bouton

let updateConfirmationBlock = document.getElementsByClassName('update_confirmation_block'); //Bouton de confirmation

let userLines = document.getElementsByClassName('user_datas');


for (let i = 0; i < nButtons; i++) {
    updateButtons[i].addEventListener('click', function(event){
        
        event.preventDefault();
        updateConfirmationBlock[i].style.display = 'block';

        let updatingInputs = userLines[i].children;

        for (let j = 0; j < 4 ; j++){
            updatingInputs[j].children[0].readOnly = false;
        }
        
    });

 }

 let annulUpButton = document.getElementsByClassName('annul_updating'); //Premier bouton

 for (let i = 0; i < nButtons; i++) {
     annulUpButton[i].addEventListener('click', function(event){
         
         event.preventDefault();
         updateConfirmationBlock[i].style.display = 'none';
         let updatingInputs = userLines[i].children;

         for (let j = 0; j < 4 ; j++){
             updatingInputs[j].children[0].readOnly = true;
             updatingInputs[j].children[0].style.backgroundColor = 'white';
         }
 
     });
 
  } 