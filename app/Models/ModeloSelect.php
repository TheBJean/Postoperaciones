<?php

namespace App\Models;

use CodeIgniter\Model;

class ModeloSelect extends Model
{
    // Método para seleccionar todos los usuarios de la tabla tbl_usuarios
    public function SelectUsuarioFC()
    {
        try {
            $variable = $this->db->query('SELECT * FROM tbl_usuarios');
            log_message('info', 'Query ejecutada correctamente: SELECT * FROM tbl_usuarios');
            return $variable->getResult();
        } catch (\Throwable $th) {
            log_message('error', $th->getMessage());
            return $th->getMessage();
        }
    }
}


// Hay que agregar al controlador el use App\Models\Nombre de la clase modelo;
