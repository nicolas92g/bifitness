function goToPage(index){
    let sections = document.getElementsByTagName('section');

    for (let i = 0; i < sections.length; i++) {
        if(index === i) sections[i].style.display = 'block';
        else sections[i].style.display = 'none';
    }
}

let page = 0;
goToPage(page);
let results = {};

function nextPage(result){
    results[page] = result;
    page++;
    goToPage(page);
    console.log(results);
}

function zonesFunction(){
    let result = [];
    inputs = document.getElementById('zones').getElementsByTagName('input');

    for (const input of inputs) {
        if (input.checked){
            result.push(input.name);
        }
    }
    nextPage(result);
}