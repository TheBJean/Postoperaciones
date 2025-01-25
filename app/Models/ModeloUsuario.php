<?php

namespace App\Models;

use CodeIgniter\Model;

class ModeloUsuario extends Model
{
    public function MetodoModeloInsertUsuario($Parametrosdelcontrolador)
    {
        try {
            $v1 = $Parametrosdelcontrolador['usu_nombre'];
            $v2 = $Parametrosdelcontrolador['usu_apellido'];
            $v3 = $Parametrosdelcontrolador['usu_correo'];
            $v4 = $Parametrosdelcontrolador['usu_pass'];
            $query = $this->db->query(
                "CALL SP_INSERT_USUARIO(?,?,?,?)",
                array($v1, $v2, $v3, $v4)
            );
            if ($query) {
                echo 'Ingreso Exitoso';
            } else {
                echo 'Fallo ingreso';
            }
        } catch (\Throwable $th) {
            echo $th;
        }
    }
}

// Hay que agregar al controlador el use App\Models\Nombre de la clase modelo;
