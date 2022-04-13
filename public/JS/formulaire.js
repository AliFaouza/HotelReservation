let formulaire=document.querySelectorAll('.formulaire');

let nbreFormulaire=formulaire.length;
let formulaireActif=1;
window.onload=()=>{
document.querySelector(".formulaire").classList.remove("d-none");


    let btnNext =document.querySelectorAll('.next');
    for(btn of btnNext){
        btn.addEventListener('click',formulaireNext);
    }

    let btnPrev=document.querySelectorAll('.prev');
    if(btnPrev){
        for(btn of btnPrev){
            btn.addEventListener('click',formulairePrev)
        }
    }
   
   
}

function formulairePrev(){
    for(form of formulaire){
        form.classList.add("d-none");
    }
    this.parentElement.previousElementSibling.classList.remove("d-none");
}

function formulaireNext(){
    for(form of formulaire){
        form.classList.add("d-none");
        
    }
    this.parentElement.nextElementSibling.classList.remove("d-none");
}


