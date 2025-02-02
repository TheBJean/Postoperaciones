<?php

namespace App\Models;

use CodeIgniter\Model;

class ModeloOperacion extends Model
{
    protected $table = 'Operaciones';
    protected $primaryKey = 'Id';
    protected $allowedFields = ['Operacion', 'Num1', 'Num2', 'Num3', 'Resultado'];

     // Método para insertar una operación en la base de datos

    public function insertarOperacion($data)
    {
        return $this->insert($data);
    }
}