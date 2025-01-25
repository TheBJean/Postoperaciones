<?php

namespace App\Models;

use CodeIgniter\Model;

class ModeloSelect extends Model
{
    public function SelectUsuarioFC()
    {
        try {
            $variable = $this->db->query('Select * from tbl_usuarios');
            log_message('info', 'Query ejecutada correctamente: CALL SP_SELECT_USUARIO');
            return $variable->getResult();
        } catch (\Throwable $th) {
            log_message('error', $th->getMessage());
            return $th->getMessage();
        }
    }
}


// Hay que agregar al controlador el use App\Models\Nombre de la clase modelo;
