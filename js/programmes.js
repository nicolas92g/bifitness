function goToPage(index){
    let sections = document.getElementsByTagName('section');

    for (let i = 0; i < sections.length; i++) {
        if(index === i) sections[i].style.display = 'flex';
        else sections[i].style.display = 'none';
    }
}

goToPage(0);