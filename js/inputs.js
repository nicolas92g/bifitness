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
    if (id === "poidsValue" || id === "poidsCibleValue"){
        if (result > 0 && result < 300){
            nextPage(result);
        }
        else
            alert("Votre poids n'est pas valide !");
    }
}

function onTextValidation(id){
    const result = document.getElementById(id).value;
    if (id === "nomValue"){
        if (result.length > 1){
            nextPage(result);
        }
        else{
            alert("Votre nom est trop petit !");
        }
    }
}