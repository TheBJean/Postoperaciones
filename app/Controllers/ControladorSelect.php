<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\ModeloSelect;
use PhpParser\Node\Expr\Print_;

class ControladorSelect extends BaseController
{
    public function SelectUsuarioFC()
    {
        // objeto que tiene todos los metodos de la hoja modelo
        $instanciaobjeto = new ModeloSelect();
        // en una variable se almacena los datos de la funcion modelo

        $datoscontrolador = $instanciaobjeto->SelectUsuarioFC();

        Print_r($datoscontrolador);
    }
}
