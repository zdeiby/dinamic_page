<?php

namespace App\Models;

use CodeIgniter\Model;

class M_submenu extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'submenu';
    protected $primaryKey       = 'id_sub';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields = ['submenu','created_by','slug','opcion'];

    // Dates
    protected $useTimestamps = false;
   // protected $dateFormat    = 'datetime';
  //  protected $createdField  = 'created_at';
   // protected $updatedField  = 'updated_at';
   // protected $deletedField  = 'deleted';

    // Validation
    protected $validationRules      = [];
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