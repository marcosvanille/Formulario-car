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
    console.log(carros.value)
    if (tipo.value == 'A') { //A comum
        preco.value = "1"; // 20 a 30 mil
        carros.value = "up"
    }
    if (tipo.value == 'B') { //B confortavel
        preco.value = "2" // 50 a 100 mil
    }
    if (tipo.value == 'C') { //C  esportivo
        preco.value = '3'  // 200 a 500 mil
    }
}


// function somenteNumeros(e) {
//     var charCode = e.charCode ? e.charCode : e.keyCode;
//     // charCode 8 = backspace
//     // charCode 9 = tab
//     if (charCode != 8 && charCode != 9) {
//         // charCode 48 equivale a 0
//         // charCode 57 equivale a 9
//         if (charCode < 48 || charCode > 57) {
//             return false;
//         }
//     }
// }


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