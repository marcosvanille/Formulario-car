var tipo = document.getElementById('inputTipo')
var preco = document.getElementById('inputPreco')
var carros = document.getElementById('inputCarro')
var nome = document.getElementById('inputNome')
var email = document.getElementById('inputEmail')


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


// // bb.onclick = function (){
// // console.log(cc);
// // }
// // $(function(){
// //     $("#B").html("jquery aaa")
// // });
//
// // $( "#inputTipo " ).click(function() {
// //
// // });
//
// $("#B").onclick(function (event){
//     console.log(event.currentTarget);
//     console.log(this);
//
// })