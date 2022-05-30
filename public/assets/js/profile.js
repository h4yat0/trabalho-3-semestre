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
    let input =  document.getElementsByClassName('form-disabled');
    let info = document.getElementsByClassName('profileInfo');

    for(let i = 0; i < input.length; i++) {

        if(input[i].style.display = inputDisplayTarget) {
            input[i].style.display = inputDisplay;
            input[i].disabled = disabled;

            if(i < info.length) info[i].style.display = infoDisplay;
        }
    }
}