<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\ModeloUsuario;

class CBdd extends BaseController
{
    public function testconexion()
    {
        $datosdeconexion = \Config\Database::connect();
        if ($datosdeconexion->connect()) {
            echo 'Se conecto papu';
        } else {
            echo 'Error de conexion papu';
        }
    }

    // Crear el metodo para mostrar el formulario Crear Usuario
    public function MetodoVerFormularioUsuario()
    {
        return view('VInsertUsuario');
    }
    // Metodo para trabajar post con Models
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
}
