var mudar = 1

document.getElementById("radio1").checked = true

setInterval(() => {
    change()
}, 4000);

function change() {
    mudar++

    if (mudar > 5) {
        mudar = 1
    }

    document.getElementById("radio" + mudar).checked = true
}
