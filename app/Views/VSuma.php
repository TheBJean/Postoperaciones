<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Suma</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h1>Operaciones con POST</h1>
            </div>
            <div class="card-body">
                <form id="sumForm" action="<?= base_url('CBdd/MPostSuma') ?>" method="post">
                    <div class="mb-3">
                        <label for="num1" class="form-label">Número 1:</label>
                        <input id="num1" name="vNum1" type="number" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="num2" class="form-label">Número 2:</label>
                        <input id="num2" name="vNum2" type="number" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="num3" class="form-label">Número 3:</label>
                        <input id="num3" name="vNum3" type="number" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="operacion" class="form-label">Selecciona una operación:</label>
                        <select name="operacion" id="operacion" class="form-select" required>
                            <option value="">Seleccione una operación</option>
                            <option value="Sumar">Sumar</option>
                            <option value="Restar">Restar</option>
                            <option value="Multiplicar">Multiplicar</option>
                            <option value="Dividir">Dividir</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-success">Procesar</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        // Función para validar el formulario antes de enviarlo
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
    </script>
</body>

</html>