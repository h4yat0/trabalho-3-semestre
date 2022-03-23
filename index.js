function showHideCards() {

    let amountOfCards = document.citiesForm.amountOfCards.value;
    let card1 = document.getElementById("card1");
    let card2 = document.getElementById("card2");
    let card3 = document.getElementById("card3");

    if(amountOfCards == "one") {
        card1.style.display = "grid";
        card2.style.display = "none";
        card3.style.display = "none";
    }
    if(amountOfCards == "two") {
        card1.style.display = "grid";
        card2.style.display = "grid";
        card3.style.display = "none";
    }
    if(amountOfCards == "three") {
        card1.style.display = "grid";
        card2.style.display = "grid";
        card3.style.display = "grid";
    }
}

function showHideForms() {

    let amountOfForms = document.citiesForm.amountOfForms.value;
    let city1 = document.citiesForm.city1;
    let city2 = document.citiesForm.city2;
    let city3 = document.citiesForm.city3;
    let city4 = document.citiesForm.city4;
    let city5 = document.citiesForm.city5;
    let city6 = document.citiesForm.city6;

    if (amountOfForms == "one") {
        city1.style.display = "block";
        city2.style.display = "none";
        city3.style.display = "none";
        city4.style.display = "none";
        city5.style.display = "none";
        city6.style.display = "none";
    }
    if (amountOfForms == "two") {
        city1.style.display = "block";
        city2.style.display = "block";
        city3.style.display = "none";
        city4.style.display = "none";
        city5.style.display = "none";
        city6.style.display = "none";
    }
    if (amountOfForms == "three") {
        city1.style.display = "block";
        city2.style.display = "block";
        city3.style.display = "block";
        city4.style.display = "none";
        city5.style.display = "none";
        city6.style.display = "none";
    }
    if (amountOfForms == "four") {
        city1.style.display = "block";
        city2.style.display = "block";
        city3.style.display = "block";
        city4.style.display = "block";
        city5.style.display = "none";
        city6.style.display = "none";
    }
    if (amountOfForms == "five") {
        city1.style.display = "block";
        city2.style.display = "block";
        city3.style.display = "block";
        city4.style.display = "block";
        city5.style.display = "block";
        city6.style.display = "none";
    }
    if (amountOfForms == "six") {
        city1.style.display = "block";
        city2.style.display = "block";
        city3.style.display = "block";
        city4.style.display = "block";
        city5.style.display = "block";
        city6.style.display = "block";
    }
}