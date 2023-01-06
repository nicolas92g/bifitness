function openPage(index){
    let sections = document.getElementsByClassName("question");

    for (let i = 0; i < sections.length; i++) {
        if (i != index)
            sections[i].style.display = "none";
        else
            sections[i].style.display = "block";
    }
}



let page = 0;
let results = {};
const constantesDactivite = [1.2, 1.375, 1.55, 1.725, 1.9];
let inputs = {
    sexe : 1,
    age : 2,
    poids : 3,
    taille : 4,
    activite : 5
}

function nextPage(result){
    results[page] = result;
    page++;
    openPage(page);

    //last page result
    if (page === 6){
        let resultSection = document.getElementById("result");

        let cal =
            10 * results[inputs.poids]
            + 6.25 * results[inputs.taille]
            - 5 * results[inputs.age]
            + (results[inputs.sexe] === "f" ? 5 : -161);

        cal *= constantesDactivite[results[inputs.activite]];

        resultSection.innerHTML =
            "<img src='../../assets/food.svg' alt='nutrition'>" +
            "<H4>Votre apport calorique de maintien est de " + Math.round(cal) +" calories</H4>" +
            "<button onclick='history.back()'>Retour</button>";
    }
}

function previousPage(){
    page -= page === 0 ? 0 : 1;
    openPage(page);
}
