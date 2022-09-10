function validanome1() {
    if(document.getElementsByName("nome")[0].value=="") {
        alert("Por Favor, Preencha O Campo!");
        document.getElementsByName("nome")[0].focus();
        return false;
    }
}

function validanum1() {
    if(document.getElementsByName("num1")[0].value=="") {
        alert("Por Favor, Preencha O Campo!");
        document.getElementsByName("num1")[0].focus();
        return false;
    }
}