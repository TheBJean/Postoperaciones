<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

//php spark make:controller CSuma
class CSuma extends BaseController
{
    public function MSumar()
    {
        $vistas = view('VSuma') . view('footer');
        return $vistas;
    }

    public function MSumarVariable($variable1)
    {
        if ($variable1 == "zap") {
            return view('disenio2');
        } elseif ($variable1 == 2) {
            return view('VSuma');
        }
    }

    public function MPostSuma()
    {
        // Obtener los números del formulario
        $num1 = $this->request->getPost('vNum1');
        $num2 = $this->request->getPost('vNum2');
        $num3 = $this->request->getPost('vNum3');
        $operacion = $this->request->getPost('operacion');

        // Inicializar el resultado
        $resultado = 0;

        // Realizar la operación seleccionada
        switch ($operacion) {
            case 'Sumar':
                $resultado = $num1 + $num2 + $num3;
                break;
            case 'Restar':
                $resultado = $num1 - $num2 - $num3;
                break;
            case 'Multiplicar':
                $resultado = $num1 * $num2 * $num3;
                break;
            case 'Dividir':
                // Verificar que no se divida por cero
                if ($num2 != 0 && $num3 != 0) {
                    $resultado = $num1 / $num2 / $num3;
                } else {
                    $resultado = 'Error: División por cero';
                }
                break;
            default:
                $resultado = 'Operación no válida';
                break;
        }

        // Pasar los resultados a la vista
        return view('VResultado', [
            'llave1' => $num1,
            'llave2' => $num2,
            'llave3' => $num3,
            'llaveResultado' => $resultado,
            'operacion' => $operacion
        ]);
    }

    public function updateOperation()
    {
        // Obtener los números y la operación desde la solicitud
        $num1 = $this->request->getPost('num1');
        $num2 = $this->request->getPost('num2');
        $num3 = $this->request->getPost('num3');
        $operacion = $this->request->getPost('operacion');

        // Inicializar el resultado
        $resultado = 0;

        // Realizar la operación seleccionada
        switch ($operacion) {
            case 'Sumar':
                $resultado = $num1 + $num2 + $num3;
                break;
            case 'Restar':
                $resultado = $num1 - $num2 - $num3;
                break;
            case 'Multiplicar':
                $resultado = $num1 * $num2 * $num3;
                break;
            case 'Dividir':
                if ($num2 != 0 && $num3 != 0) {
                    $resultado = $num1 / $num2 / $num3;
                } else {
                    $resultado = 'Error: División por cero';
                }
                break;
            default:
                $resultado = 'Operación no válida';
                break;
        }

        // Retornar el resultado como JSON
        return $this->response->setJSON(['resultado' => $resultado]);
    }
}
