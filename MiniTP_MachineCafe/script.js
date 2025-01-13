const onOff = document.querySelector(".coffeHeaderDisplay");
const liquid = document.querySelector("#liquid");
const smokes = document.querySelectorAll("#smoke div");

onOff.addEventListener("click", handleOnOff);

function handleOnOff() {
    onOff.classList.add("onOff");
    liquid.classList.add("coffeeLiquid");
// c'est ici qu'on peut faire une requête ! on peut faire une méthode post en JS
    smokes.forEach(smoke => {
        smoke.classList.add("coffeeSmoke");
    });

    setTimeout(() => {
        onOff.classList.remove("onOff");
        liquid.classList.remove("coffeeLiquid");

    }, 5000)


    setTimeout(() => {
        smokes.forEach(smoke => {
            smoke.classList.remove("coffeeSmoke");
        });
    }, 7000);
}

