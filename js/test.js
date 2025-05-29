var mudar = 1

document.getElementById("radio1").checked = true

setInterval(() => {
    change()
}, 4000);

function change() {
    mudar++

    if (mudar > 4) {
        mudar = 1
    }

    document.getElementById("radio"+mudar).checked = true
}