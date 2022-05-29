function enableInput(bool) {

    let inputDisplayTarget;
    let inputDisplay;
    let disabled;
    let infoDisplay;

    if(bool) {
        inputDisplayTarget = "none";
        inputDisplay = "inline-block";
        disabled = false;
        infoDisplay = "none";
    } else {
        inputDisplayTarget = "inline-block";
        inputDisplay = "none";
        disabled = true;
        infoDisplay = "block";
    }

    for(let i = 0; i < 7; i++) {
        let input =  document.getElementsByClassName('form-disabled');
        let info = document.getElementsByClassName('profileInfo');

        if(input[i].style.display = inputDisplayTarget) {
            input[i].style.display = inputDisplay;
            input[i].disabled = disabled;

            if(i < 6) info[i].style.display = infoDisplay;
        }
    }
}