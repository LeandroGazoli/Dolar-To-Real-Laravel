async function apiMoedas() {
    let value = document.getElementById("moedas").value;
    fetch("https://economia.awesomeapi.com.br/json/last/" + value)
        .then((response) => response.json())
        .then((data) => {
            if (data.status) {
                Swal.fire("Error!", "Moeda não encontrada", "error");
            } else {
                Swal.fire("Sucesso!", "Moeda encontrada", "success");
            }
        })
        .catch(() => {
            Swal.fire("Error!", "Moeda não encontrada", "danger");
        });
}

async function sendForm() {
    let value = document.getElementById("moedas").value;
    fetch("https://economia.awesomeapi.com.br/json/last/" + value)
        .then((response) => response.json())
        .then((data) => {
            if (data.status) {
                Swal.fire("Error!", "Favor inserir uma moeda válida", "error");
            } else {
            }
        })
        .catch(() => {
            Swal.fire("Error!", "Moeda não encontrada", "error");
        });
}

// apiMoedas();
