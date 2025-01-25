<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="public/vresultado.js">
    
    </script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">PUCE</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link <?= $operacion == 'Sumar' ? 'active' : '' ?>" href="#" onclick="updateOperation('Sumar')">Sumar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= $operacion == 'Restar' ? 'active' : '' ?>" href="#" onclick="updateOperation('Restar')">Restar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= $operacion == 'Multiplicar' ? 'active' : '' ?>" href="#" onclick="updateOperation('Multiplicar')">Multiplicar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= $operacion == 'Dividir' ? 'active' : '' ?>" href="#" onclick="updateOperation('Dividir')">Dividir</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <h1>Esta es la vista resultado</h1>
        <div class="mb-3">
            <input type="text" id="num1" placeholder="Número 1" value="<?php echo $llave1; ?>" class="form-control" readonly>
        </div>
        <div class="mb-3">
            <label id="operacion" for=""><?php echo $operacion == 'Sumar' ? '+' : ($operacion == 'Restar' ? '-' : ($operacion == 'Multiplicar' ? '×' : '÷')); ?></label>
            <input type="text" id="num2" placeholder="Número 2" value="<?php echo $llave2; ?>" class="form-control" readonly>
        </div>
        <div class="mb-3">
            <label for=""><?php echo $operacion == 'Sumar' ? '+' : ($operacion == 'Restar' ? '-' : ($operacion == 'Multiplicar' ? '×' : '÷')); ?></label>
            <input type="text" id="num3" placeholder="Número 3" value="<?php echo $llave3; ?>" class="form-control" readonly>
        </div>
        <div class="mb-3">
            <label for="">=</label>
            <input type="text" id="resultado" placeholder="Resultado" value="<?php echo $llaveResultado; ?>" class="form-control" readonly>
        </div>
        <a href="<?= base_url() ?>rutaurl/3" class="btn btn-primary">Redireccionar a la página principal</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>