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

        resultSection.innerHTML ="<h1>Votre apport calorique est de " + Math.round(cal) +" calories</h1>" +
            "<button onclick='history.back()'>Retour</button>";
    }
}

function previousPage(){
    page -= page === 0 ? 0 : 1;
    openPage(page);
}

function onNumberValidation(id){
    const result = document.getElementById(id).value;

    //age case
    if (id === "ageValue"){
        if (result > 0 && result < 120){
            nextPage(result);
        }
        else
            alert("Votre age n'est pas valide !");
    }

    //height case
    if (id === "tailleValue"){
        if (result > 50 && result < 300){
            nextPage(result);
        }
        else
            alert("Votre taille n'est pas valide !");
    }

    //weight case
    if (id === "poidsValue"){
        if (result > 0 && result < 300){
            nextPage(result);
        }
        else
            alert("Votre poids n'est pas valide !");
    }
}
