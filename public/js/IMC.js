document.getElementById('calculate').addEventListener('click', function() {
    const weight = parseFloat(document.getElementById('weight').value);
    const height = parseFloat(document.getElementById('height').value);

    if (isNaN(weight) || isNaN(height)) {
        document.getElementById('result').innerHTML = 'Preencha valores válidos.';
    } else {
        const bmi = weight / (height * height);
        document.getElementById('result').innerHTML = `Seu IMC é: ${bmi.toFixed(2)}`;
    }
});
