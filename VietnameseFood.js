window.addEventListener("DOMContentLoaded", domLoaded);

var numElements = 0;
var numMain = 0;
var numSide = 0;
var numDrink = 0;

function domLoaded () {
    console.log("Hello World!");
    document.querySelector("#Randomizer").addEventListener("click", randomizeAll);
    document.querySelector("#Resetter").addEventListener("click", resetRecipe);

    document.querySelector(".CardContainer > div:nth-child(1)").addEventListener("click", randomizeMain);
    document.querySelector(".CardContainer > div:nth-child(2)").addEventListener("click", randomizeSide);
    document.querySelector(".CardContainer > div:nth-child(3)").addEventListener("click", randomizeDrink);
}

function randomizeMain() {
    var newElement = document.createElement("div");
    var resultElement = document.querySelector(".results");
    var oldElement = resultElement.firstChild;

    if (numElements > 30) {
        overflowProtection();
    }

    const elementHtml = `<div class=\"card\"><div class=\"Image\"> <img src=\"Placeholder.png\" alt=\"Vietnamese Food\" style=\"width: 100%\"></div><div class=\"container\"><h4><b>Main Course ${numMain+1}</b></h4><p>Selected Main Course Appears Here.</p></div></div> `;
    newElement.innerHTML = elementHtml;
    resultElement.insertBefore(newElement, oldElement);
    numElements++;
    numMain++;
}

function randomizeAll() {
    randomizeDrink();
    randomizeSide();
    randomizeMain();
}

function randomizeSide() {
    var newElement = document.createElement("div");
    var resultElement = document.querySelector(".results");
    var oldElement = resultElement.firstChild;

    if (numElements > 30) {
        overflowProtection();
    }

    const elementHtml = `<div class=\"card\"><div class=\"Image\"> <img src=\"Placeholder.png\" alt=\"Vietnamese Food\" style=\"width: 100%\"></div><div class=\"container\"><h4><b>Side Course ${numSide+1}</b></h4><p>Selected Side Course Appears Here.</p></div></div> `;
    newElement.innerHTML = elementHtml;
    resultElement.insertBefore(newElement, oldElement);
    numElements++;
    numSide++;
}

function randomizeDrink() {
    var newElement = document.createElement("div");
    var resultElement = document.querySelector(".results");
    var oldElement = resultElement.firstChild;

    if (numElements > 30) {
        overflowProtection();
    }

    const elementHtml = `<div class=\"card\"><div class=\"Image\"> <img src=\"Placeholder.png\" alt=\"Vietnamese Food\" style=\"width: 100%\"></div><div class=\"container\"><h4><b>Drink ${numDrink+1}</b></h4><p>Selected Drink Appears Here.</p></div></div> `;
    newElement.innerHTML = elementHtml;
    resultElement.insertBefore(newElement, oldElement);
    numElements++;
    numDrink++;
}

function resetRecipe() {
    var resultElement = document.querySelector(".results");

    while (resultElement.firstChild) {
        resultElement.removeChild(resultElement.firstChild);
    }
    numElements = 0;
    numMain = 0;
    numSide = 0;
    numDrink = 0;
    
}

function overflowProtection() {
    var resultElement = document.querySelector(".results");

    resultElement.removeChild(resultElement.lastChild);
}