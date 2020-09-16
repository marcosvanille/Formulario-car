var tipo = document.getElementById('inputTipo')
var preco = document.getElementById('inputPreco')
var carros = document.getElementById('inputCarro')
var nome = document.getElementById('inputNome')
var telefone = document.getElementById('inputFone')
var email = document.querySelector('#email');
var error = document.querySelector('#error-email');

function cadastrar() {

    if (nome.value == "") {
        alert('Preencha  o campo nome!')

        return
    }
    if (email.value == "") {
        alert('preencha o campo Email')

        return
    }
    if (telefone.value == "") {
        alert('preencha o campo de telefone')
    }

    alert('Cadastrado com sucesso!!')

    return;
}

function tipoCar() {
    if (tipo.value == 'A') { //A comum
        preco.value = "20 a 30 mil"; // 20 a 30 mil
        preco.readOnly = true

        limpaResetCarros()

        var comum0 = document.createElement("option");
        comum0.value = "up";
        comum0.text = "UP";
        carros.add(comum0, carros.options[0]);

        var comum1 = document.createElement("option");
        comum1.value = "palio";
        comum1.text = "Palio";
        carros.add(comum1, carros.options[0]);

        var comum2 = document.createElement("option");
        comum2.value = "uno";
        comum2.text = "Uno";
        carros.add(comum2, carros.options[0]);

        var comum3 = document.createElement("option");
        comum3.value = "gol";
        comum3.text = "Gol";
        carros.add(comum3, carros.options[0]);

        return
    }

    if (tipo.value == 'B') { //B confortavel
        preco.value = "50 a 100 mil" // 50 a 100 mil
        preco.disabled = true

        limpaResetCarros()

        var confortavel0 = document.createElement("option");
        confortavel0.value = "bmw";
        confortavel0.text = "Bmw";
        carros.add(confortavel0, carros.options[0]);

        var confortavel01 = document.createElement("option");
        confortavel01.value = "mercedes";
        confortavel01.text = "Mercedes";
        carros.add(confortavel01, carros.options[0]);

        var confortavel02 = document.createElement("option");
        confortavel02.value = "fusion";
        confortavel02.text = "Fusion";
        carros.add(confortavel02, carros.options[0]);

    }
    if (tipo.value == 'C') { //C  esportivo
        preco.value = '200 a 500 mil '  // 200 a 500 mil
        preco.disabled = true

        limpaResetCarros()

        var esportivo0 = document.createElement("option");
        esportivo0.value = "ferrari";
        esportivo0.text = "Ferrari";
        carros.add(esportivo0, carros.options[0]);


        var esportivo01 = document.createElement("option");
        esportivo01.value = "bugati";
        esportivo01.text = "Bugati";
        carros.add(esportivo01, carros.options[0]);

        var esportivo02 = document.createElement("option");
        esportivo02.value = "lamborghini";
        esportivo02.text = "Lamborghini";
        carros.add(esportivo02, carros.options[0]);


    }
}

function limpaResetCarros() {

    while (carros.length) {
        carros.remove(0);
    }


}

//Validaçao do E-mail
function validarEmail() {


    if (!email.checkValidity()) {
        error.innerHTML = "Email invalido";
    }

}

function redefinirMsg() {
    var error = document.querySelector('#error-email');
    if (error.innerHTML == "Email invalido") {
        error.innerHTML = "";
    }
}


//mascara no telefone
function mascara(o, f) {
    v_obj = o
    v_fun = f
    setTimeout("execmascara()", 1)
}

function execmascara() {
    v_obj.value = v_fun(v_obj.value)
}

function mtel(v) {
    v = v.replace(/\D/g, "");             //Remove tudo o que não é dígito
    v = v.replace(/^(\d{2})(\d)/g, "($1) $2"); //Coloca parênteses em volta dos dois primeiros dígitos
    v = v.replace(/(\d)(\d{4})$/, "$1-$2");    //Coloca hífen entre o quarto e o quinto dígitos
    return v;
}

function id(el) {
    return document.getElementById(el);
}

window.onload = function () {
    id('inputFone').onkeyup = function () {
        mascara(this, mtel);
    }
}