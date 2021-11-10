function labelIn(target){
    const label = document.querySelector(`.${target}`);
    label.classList.add('label_active');
}

function labelOut(target, input){
    const label = document.querySelector(`.${target}`);
    const inputValue = document.querySelector(`.${input}`).value;
    
    if(inputValue == ""){
        label.classList.remove('label_active');
    }
}