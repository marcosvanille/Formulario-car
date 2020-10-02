var tipo = document.getElementById('inputTipo')
var precoValor = document.getElementById('inputPreco')
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

    $.ajax({
        url: "http://localhost/projetos/Formulario-car/adiciona-dados.php",
        type: 'POST',
        data: $('#formulario').serialize(),
        success: function (data) {
            alert('Cadastrado com sucesso!')
            console.log(data);
        },
        error: function (data) {
            alert('Erro ao chamar requisiçao')
        }

    });

    return;
}

function tipoCar() {
    $.ajax({
        url: "http://localhost/projetos/Formulario-car/tipo-carros.php/?tipo=" + tipo.value,
        type: 'GET',
        success: function (data) {
            tipos = data
            limpaResetCarros();
            createCarros(tipos);
            getPreco(tipo.value);

        },
        error: function (data) {
            alert('Erro ao chamar requisiçao')
        }

    });

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
        error - email
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

function createTipos(tipos) {
    tipos.forEach(function (element, index, array) {

        var optionElement = document.createElement("option");
        optionElement.value = element.tipo;
        optionElement.text = element.tipo;
        tipo.add(optionElement, tipo.options[0]);


    })
}

function createCarros(carro) {
    carro.forEach(function (element, index, array) {

        var optionElement = document.createElement("option");
        optionElement.value = element.nome;
        optionElement.text = element.nome;
        carros.add(optionElement, carros.options[0]);


    })
}

function getPreco(preco) {
    console.log(preco);
    tipos.forEach(function (element, index, array) {
        if (preco == element.tipo) {
            valorTipo = element.preco;
            precoValor.value =  element.preco
        }

    })

}

var valorTipo = "";
var tipos = [];

//preenche as informaçoes do select de tipo
$.ajax({
    url: "http://localhost/projetos/Formulario-car/carro.php",
    type: 'GET',
    success: function (data) {
        tipos = data
        createTipos(tipos);
    },
    error: function (data) {
        alert('Erro ao chamar requisiçao')
    }

});





