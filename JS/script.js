let btnAdd = document.getElementById('btn-Add');

let form = document.getElementById('form');
let btnCancel = document.getElementById('btnannuler');


// Affichage du formulaire au clic du bouton
btnAdd.addEventListener('click', (e) => {
    btnAdd.classList.toggle("d-none");
    form.classList.toggle('d-none');
});

//disparition du formulaire et affichage du bouton ajouter sur Annuler

btnCancel.addEventListener('click', (e) =>{
  btnAdd.classList.toggle("d-none");
  form.classList.toggle('d-none');
});