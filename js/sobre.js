// mostrar informação de questão

var botao = document.querySelector(".btn-questionario")
var buscar1 = document.querySelector(".resposta1")
var buscar2 = document.querySelector(".resposta2")
var buscar3 = document.querySelector(".resposta3")
var buscar4 = document.querySelector(".resposta4")
var buscar5 = document.querySelector(".resposta5")
var buscar6 = document.querySelector(".resposta6")



function primeira() {
    if (buscar1.classList.contains('mostrar')) {
        buscar1.classList.remove('mostrar')
    }

    else {
        buscar1.classList.add('mostrar')
    }
}

function segunda() {
    if (buscar2.classList.contains('mostrar')) {
        buscar2.classList.remove('mostrar')
    }

    else {
        buscar2.classList.add('mostrar')
    }
}

function terceira() {
    if (buscar3.classList.contains('mostrar')) {
        buscar3.classList.remove('mostrar')
    }

    else {
        buscar3.classList.add('mostrar')
    }
}

function quarta() {
    if (buscar4.classList.contains('mostrar')) {
        buscar4.classList.remove('mostrar')
    }

    else {
        buscar4.classList.add('mostrar')
    }
}

function quinta() {
    if (buscar5.classList.contains('mostrar')) {
        buscar5.classList.remove('mostrar')
    }

    else {
        buscar5.classList.add('mostrar')
    }
}

function sexta() {
    if (buscar6.classList.contains('mostrar')) {
        buscar6.classList.remove('mostrar')
    }

    else {
        buscar6.classList.add('mostrar')
    }
}
