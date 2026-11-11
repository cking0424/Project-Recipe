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
    const newElement = document.createElement("div");
    const resultElement = document.querySelector(".CardContainer");
    const oldElement = document.querySelector(".CardContainer > div:nth-child(1)");

    const elementHtml = `<div class=\"Image\"> <img id=\"Image\" src=\"yummyfood.png\" alt=\"Vietnamese Food\" style=\"width: 100%\" style=\"height: 100%\"></div><div class=\"container\"><h4><b>Main Course ${numMain+1}</b></h4><p>Selected Main Course Appears Here.</p></div> `;
    newElement.innerHTML = elementHtml;
    resultElement.replaceChild(newElement, oldElement);
    numElements++;
    numMain++;

    document.querySelector(".CardContainer > div:nth-child(1)").addEventListener("click", randomizeMain);
    test();
}

function randomizeAll() {
    randomizeDrink();
    randomizeSide();
    randomizeMain();
}

function randomizeSide() {
    var newElement = document.createElement("div");
    var resultElement = document.querySelector(".CardContainer");
    var oldElement = document.querySelector(".CardContainer > div:nth-child(2)");

    const elementHtml = `<div class=\"Image\"> <img id=\"Image\" src=\"yummyfood.png\" alt=\"Vietnamese Food\" style=\"width: 100%\" style=\"height: 100%\"></div><div class=\"container\"><h4><b>Side Course ${numSide+1}</b></h4><p>Selected Side Course Appears Here.</p></div> `;
    newElement.innerHTML = elementHtml;
    resultElement.replaceChild(newElement, oldElement);
    numElements++;
    numSide++;

    document.querySelector(".CardContainer > div:nth-child(2)").addEventListener("click", randomizeSide);
}

function randomizeDrink() {
    var newElement = document.createElement("div");
    var resultElement = document.querySelector(".CardContainer");
    var oldElement = document.querySelector(".CardContainer > div:nth-child(3)");

    const elementHtml = `<div class=\"Image\"> <img id=\"Image\" src=\"yummyfood.png\" alt=\"Vietnamese Food\" style=\"width: 100%\" style=\"height: 100%\"></div><div class=\"container\"><h4><b>Drink ${numDrink+1}</b></h4><p>Selected Drink Appears Here.</p></div> `;
    newElement.innerHTML = elementHtml;
    resultElement.replaceChild(newElement, oldElement);
    numElements++;
    numDrink++;

    document.querySelector(".CardContainer > div:nth-child(3)").addEventListener("click", randomizeDrink);
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
    
    randomizeAll();
}

async function test() {
    const randNums = {
        firstNum: 10,
        secondNum: 15,
        thridNum: 20
    };
    const url = "vietnameseFood.php";
    const myHeaders = new Headers();
    myHeaders.append("Content-Type", "application/json");

    try {
        const response = await fetch(url, {
            method: "POST",
            body: JSON.stringify(randNums),
            header: {
                "Content-Type": "application/json",
            },
        });
        if (!response.ok) {
            throw new Error(`Response Status: ${response.status}`);
        }

        const result = await response.json();
        console.log(result);
    } catch(error) {
        console.log("Error Occured");
        console.error(error.message);
    }
}
