function updateOperation(operation) {
    const num1 = parseFloat(document.getElementById('num1').value);
    const num2 = parseFloat(document.getElementById('num2').value);
    const num3 = parseFloat(document.getElementById('num3').value);
    let result;

    switch (operation) {
        case 'Sumar':
            result = num1 + num2 + num3;
            break;
        case 'Restar':
            result = num1 - num2 - num3;
            break;
        case 'Multiplicar':
            result = num1 * num2 * num3;
            break;
        case 'Dividir':
            result = (num2 !== 0 && num3 !== 0) ? num1 / num2 / num3 : 'Error: División por cero';
            break;
        default:
            result = 'Operación no válida';
            break;
    }

    document.getElementById('resultado').value = result;
    document.getElementById('operacion').innerText = operation === 'Sumar' ? '+' : (operation === 'Restar' ? '-' : (operation === 'Multiplicar' ? '×' : '÷'));
}