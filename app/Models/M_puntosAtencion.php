<?php

namespace App\Models;

use CodeIgniter\Model;

class M_puntosAtencion extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'puntosAtencion';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields = ['barrio','direccion'];

    // Dates
    protected $useTimestamps = false;
   // protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
   // protected $updatedField  = 'updated_at';
   // protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = ['direccion'=> 'is_unique[puntosAtencion.direccion]'];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];
}