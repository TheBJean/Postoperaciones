<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\ModeloSelect;
use PhpParser\Node\Expr\Print_;

class ControladorSelect extends BaseController
{
    // Método para seleccionar y mostrar todos los usuarios
    public function SelectUsuarioFC()
    {
        // Crear una instancia del modelo
        $instanciaobjeto = new ModeloSelect();
        // Obtener los datos de la función del modelo
        $datoscontrolador = $instanciaobjeto->SelectUsuarioFC();

        // Mostrar los datos obtenidos
        print_r($datoscontrolador);
    }
}
