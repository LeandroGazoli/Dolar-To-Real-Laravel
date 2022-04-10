async function getMoedas() {
    const moedasCadastradas = await fetch("/api/moedas_disponiveis");
    const moedas = await moedasCadastradas.json();
    // console.log(moedas);
    for (let i = 0; i < moedas.length; i++) {
        document
            .getElementById("Moeda")
            .insertAdjacentHTML(
                "beforeend",
                '<option value="' +
                    moedas[i].moeda +
                    '">' +
                    moedas[i].moeda +
                    "</option>"
            );
    }
}

async function apiMoedas() {
    const apiMoedas = await fetch(
        "https://economia.awesomeapi.com.br/json/available/uniq"
    );
    const apiMoeda = await apiMoedas.json();
}

async function calcularMoeda(event, moeda) {
    let o, p, n;
    if (moeda === "BRL") {
        moeda = "BRL-" + document.getElementById("Moeda").value;
        p = "BRL";
    } else {
        p = moeda;
    }

    fetch("https://economia.awesomeapi.com.br/json/last/" + moeda)
        .then((response) => response.json())
        .then((data) => {
            // console.log(event.target.id);

            switch (event.target.id) {
                case "qtd-2":
                    o = document.getElementById("qtd");
                    break;

                default:
                    o = document.getElementById("qtd-2");
                    break;
            }
            // console.log(data);
            n = event.target.value * data[p].bid;
            o.value = n.toFixed(2);
        });
}

async function TrocarMoeda(event) {
    let p = document.getElementById("qtd").value;
    fetch("https://economia.awesomeapi.com.br/json/last/" + event.target.value)
        .then((response) => response.json())
        .then((data) => {
            let o = document.getElementById("qtd-2");

            o.value = data[event.target.value].bid * p;
        });
}

window.addEventListener("load", async () => {
    await getMoedas();

    let qtd = document.getElementById("qtd");
    let qtd2 = document.getElementById("qtd-2");
    let Moeda = document.getElementById("Moeda");
    qtd.addEventListener("input", () =>
        calcularMoeda(event, document.getElementById("Moeda").value)
    );
    qtd2.addEventListener("input", () =>
        calcularMoeda(event, document.getElementById("Moeda-2").value)
    );
    Moeda.addEventListener("change", () => TrocarMoeda(event));
});
