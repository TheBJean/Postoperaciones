<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <!-- Navbar para seleccionar operaciones -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Calculadora</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="performOperation('Sumar')">Sumar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="performOperation('Restar')">Restar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="performOperation('Multiplicar')">Multiplicar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="performOperation('Dividir')">Dividir</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <h1>Resultado de la Operación</h1>
        <p id="operacion">Operación: <?= $operacion ?></p>
        <p id="num1">Número 1: <?= $llave1 ?></p>
        <p id="num2">Número 2: <?= $llave2 ?></p>
        <p id="num3">Número 3: <?= $llave3 ?></p>
        <p id="resultado">Resultado: <?= $llaveResultado ?></p>
        <a href="<?= base_url('rutaurl/3') ?>" class="btn btn-primary">Realizar otra operación</a>
    </div>

    <script>
        // Función para realizar la operación seleccionada
        function performOperation(operation) {
            const num1 = parseFloat("<?= $llave1 ?>");
            const num2 = parseFloat("<?= $llave2 ?>");
            const num3 = parseFloat("<?= $llave3 ?>");

            fetch('<?= base_url("CBdd/guardarResultado") ?>', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({
                    num1: num1,
                    num2: num2,
                    num3: num3,
                    operacion: operation
                })
            })
            .then(response => response.json())
            .then(data => {
                if (data.status === 'success') {
                    document.getElementById('operacion').innerText = 'Operación: ' + operation;
                    document.getElementById('resultado').innerText = 'Resultado: ' + data.resultado;
                } else {
                    alert('Error al realizar la operación');
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });
        }
    </script>
</body>

</html>