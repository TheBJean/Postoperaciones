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
            <a class="navbar-brand" href="#">
                PUCE <img src="public/PUCE.png" alt="Logo" style="width: 30px; height: 30px; margin-left: 5px;">
            </a>
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

        <!-- Campo para la operación -->
        <div class="mb-3">
            <label for="operacion" class="form-label">Operación:</label>
            <input type="text" id="operacion" class="form-control" value="<?= $operacion ?>" readonly>
        </div>

        <!-- Campo para el número 1 -->
        <div class="mb-3">
            <label for="num1" class="form-label">Número 1:</label>
            <input type="number" id="num1" class="form-control" value="<?= $llave1 ?>" readonly>
        </div>

        <!-- Campo para el número 2 -->
        <div class="mb-3">
            <label for="num2" class="form-label">Número 2:</label>
            <input type="number" id="num2" class="form-control" value="<?= $llave2 ?>" readonly>
        </div>

        <!-- Campo para el número 3 -->
        <div class="mb-3">
            <label for="num3" class="form-label">Número 3:</label>
            <input type="number" id="num3" class="form-control" value="<?= $llave3 ?>" readonly>
        </div>

        <!-- Campo para el resultado -->
        <div class="mb-3">
            <label for="resultado" class="form-label">Resultado:</label>
            <input type="text" id="resultado" class="form-control" value="<?= $llaveResultado ?>" readonly>
        </div>

        <!-- Botón para realizar otra operación -->
        <a href="<?= base_url('rutaurl/3') ?>" class="btn btn-primary">Realizar otra operación</a>
    </div>

    <script>
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
                    // Actualizar los valores de los inputs
                    document.getElementById('operacion').value = operation;
                    document.getElementById('resultado').value = data.resultado;
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