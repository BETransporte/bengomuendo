var botao = document.querySelector(".btn-questionario")
var buscar = document.querySelector(".resposta")

botao.addEventListener('click', () => {
    if (buscar.classList.contains('mostrar')) {
        buscar.classList.remove('mostrar')
    }

    else {
        buscar.classList.add('mostrar')
    }
}
)


var botao = document.querySelector(".btn-questionario")
var buscar1 = document.querySelector(".resposta1")
var buscar2 = document.querySelector(".resposta2")
var buscar3 = document.querySelector(".resposta3")

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
        buscar3.classList.remove("mostrar")
    } else {
        buscar3.classList.add("mostrar")
    }
}