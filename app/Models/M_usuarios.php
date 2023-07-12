<?php

namespace App\Models;

use CodeIgniter\Model;

class M_usuarios extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'users';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields = ['nombre', 'documento','contrasena'];

    // Dates
    protected $useTimestamps = false;
   // protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted';

    // Validation
    protected $validationRules      = ['direccion'=> 'is_unique[users.documento]'];
   // protected $validationMessages   = [ 'documento'=>[
                                          //      'is_unique'=>'documento ya existe'
                            //                ]];
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