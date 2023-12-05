// script.js
document.getElementById("calculate").addEventListener("click", calculateTMB);

function calculateTMB() {
  const weight = parseFloat(document.getElementById("weight").value);
  const height = parseInt(document.getElementById("height").value);
  const age = parseInt(document.getElementById("age").value);

  if (!weight || !height || !age) {
    alert("Preencha todos os campos.");
    return;
  }

  const tmb = 10 * weight + 6.25 * height - 5 * age + 5;
  const interpretation = interpretTMB(tmb);

  document.getElementById("result").textContent = `Sua TMB é aproximadamente ${tmb.toFixed(2)} calorias por dia. ${interpretation}`;
}

function interpretTMB(tmb) {
  const interpretationTable = [
    { range: [0, 1200], interpretation: "Muito Baixa" },
    { range: [1201, 1500], interpretation: "Baixa" },
    { range: [1501, 1800], interpretation: "Normal" },
    { range: [1801, 2200], interpretation: "Alta" },
    { range: [2201, Infinity], interpretation: "Muito Alta" }
  ];

  const result = interpretationTable.find(entry => tmb >= entry.range[0] && tmb <= entry.range[1]);

  if (result) {
    return `Isso é considerado ${result.interpretation} para a sua atividade metabólica basal.`;
  } else {
    return "Os resultados estão fora da faixa esperada. Consulte um profissional de saúde para obter orientação.";
  }
}
