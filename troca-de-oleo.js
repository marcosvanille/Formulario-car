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

    alert('Cadastrado com sucesso!!')

    return;
}

function tipoCar() {
    console.log(tipo.value)
    console.log(preco.value)
    // console.log(carros.value)
    if (tipo.value == 'A') { //A comum
        preco.value = "20 a 30 mil"; // 20 a 30 mil
        preco.disabled = true

        var opt0 = document.createElement("option");
        opt0.value = "up";
        opt0.text = "UP";
        carros.add(opt0, carros.options[0]);

        var opt1 = document.createElement("option");
        opt1.value = "palio";
        opt1.text = "Palio";
        carros.add(opt1, carros.options[0]);


    }

    if (tipo.value == 'B') { //B confortavel
        preco.value = "50 a 100 mil" // 50 a 100 mil
        preco.disabled = true


        var value0 = document.createElement("option");
        value0.value = "bmw";
        value0.text = "Bmw";
        carros.add(value0, carros.options[0]);


    }
    if (tipo.value == 'C') { //C  esportivo
        preco.value = '200 a 500 mil '  // 200 a 500 mil
        preco.disabled = true

    }
}


function validarEmail() {
    var email = document.querySelector('#email');
    var error = document.querySelector('#error-email');

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