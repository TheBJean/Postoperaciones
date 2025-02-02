<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\ModeloUsuario;
use App\Models\ModeloOperacion;

class CBdd extends BaseController
{
    // Método para probar la conexión a la base de datos
    public function testconexion()
    {
        $datosdeconexion = \Config\Database::connect();
        if ($datosdeconexion->connect()) {
            echo 'Se conecto papu';
        } else {
            echo 'Error de conexion a gastronomia';
        }
    }

    // Método para mostrar el formulario de creación de usuario
    public function MetodoVerFormularioUsuario()
    {
        return view('VInsertUsuario');
    }

    // Método para insertar un nuevo usuario
    public function MetodoInsertarUsuario()
    {
       $instancia = new ModeloUsuario();
       $datos = [
        'usu_nombre' => $_POST['VNombre'],
        'usu_apellido' => $_POST['VApellido'],
        'usu_correo' => $_POST['VCorreo'],
        'usu_pass' => password_hash($_POST['VPass'], PASSWORD_DEFAULT)
       ];
       $instancia->MetodoModeloInsertUsuario($datos);
    }

    // Método para procesar la suma
    public function MPostSuma()
    {
        // Obtener los números y la operación
        $num1 = $this->request->getPost('vNum1');
        $num2 = $this->request->getPost('vNum2');
        $num3 = $this->request->getPost('vNum3');
        $operacion = $this->request->getPost('operacion');

        // Calcular el resultado
        $resultado = '';
        switch ($operacion) {
            case 'Sumar':
                $resultado = (float)$num1 + (float)$num2 + (float)$num3;
                break;
            case 'Restar':
                $resultado = (float)$num1 - (float)$num2 - (float)$num3;
                break;
            case 'Multiplicar':
                $resultado = (float)$num1 * (float)$num2 * (float)$num3;
                break;
            case 'Dividir':
                $resultado = ((float)$num2 != 0 && (float)$num3 != 0) ? (float)$num1 / (float)$num2 / (float)$num3 : 'Error: División por cero';
                break;
        }

        // Usar el modelo para insertar la operación en la base de datos
        $modeloOperacion = new ModeloOperacion();
        $modeloOperacion->insertarOperacion([
            'Operacion' => $operacion,
            'Num1' => (string)$num1,
            'Num2' => (string)$num2,
            'Num3' => (string)$num3,
            'Resultado' => (string)$resultado
        ]);

        // Redirigir a la vista de resultados
        return redirect()->to('VResultado')->with('operacion', $operacion)
            ->with('num1', (string)$num1)
            ->with('num2', (string)$num2)
            ->with('num3', (string)$num3)
            ->with('resultado', (string)$resultado);
    }

    // Método para mostrar el resultado
    public function VResultado()
    {
        // Obtener los datos de la sesión
        $operacion = session()->get('operacion');
        $num1 = session()->get('num1');
        $num2 = session()->get('num2');
        $num3 = session()->get('num3');
        $resultado = session()->get('resultado');

        // Cargar la vista de resultados
        return view('VResultado', [
            'operacion' => $operacion,
            'llave1' => $num1,
            'llave2' => $num2,
            'llave3' => $num3,
            'llaveResultado' => $resultado
        ]);
    }

    // Método para guardar el resultado de la operación
    public function guardarResultado()
    {
        $data = $this->request->getJSON();
    
        $num1 = $data->num1;
        $num2 = $data->num2;
        $num3 = $data->num3;
        $operacion = $data->operacion;
    
        // Calcular el resultado
        $resultado = '';
        switch ($operacion) {
            case 'Sumar':
                $resultado = (float)$num1 + (float)$num2 + (float)$num3;
                break;
            case 'Restar':
                $resultado = (float)$num1 - (float)$num2 - (float)$num3;
                break;
            case 'Multiplicar':
                $resultado = (float)$num1 * (float)$num2 * (float)$num3;
                break;
            case 'Dividir':
                $resultado = ((float)$num2 != 0 && (float)$num3 != 0) ? (float)$num1 / (float)$num2 / (float)$num3 : 'Error: División por cero';
                break;
            default:
                $resultado = 'Operación no válida';
        }
    
        // Usar el modelo para insertar la operación en la base de datos
        $modeloOperacion = new ModeloOperacion();
        $modeloOperacion->insertarOperacion([
            'Operacion' => $operacion,
            'Num1' => (string)$num1,
            'Num2' => (string)$num2,
            'Num3' => (string)$num3,
            'Resultado' => (string)$resultado
        ]);
    
        return $this->response->setJSON(['status' => 'success', 'resultado' => $resultado]);
    }
}
