function validateForm() {
    const num1 = document.getElementById('num1').value;
    const num2 = document.getElementById('num2').value;
    const num3 = document.getElementById('num3').value;
    const operacion = document.getElementById('operacion').value;

    if (!num1 || !num2 || !num3 || !operacion) {
        alert('Por favor, complete todos los campos.');
        return false;
    }
    return true;
}