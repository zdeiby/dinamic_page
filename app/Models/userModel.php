<?php

namespace App\Models;

use CodeIgniter\Model;


class userModel extends Model
{
    protected $table      = 'users';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['name', 'email'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted';

    // Validation
    protected $validationRules      = [
        'name'=> 'required|alpha_numeric_space|min_length[3]',
        'email'=> 'required|valid_email|is_unique[users.email]'
    ];
    protected $validationMessages   = [
        'email'=>[
            'is_unique'=>'correo ya existe'
        ]
    ];
    protected $skipValidation       = false;
    //protected $cleanValidationRules = true;

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


    public function GETusuarios(){
        
        $sql = "SELECT * FROM users;";
        $query=$this->db->query($sql);
        $result = $query->getResult();

        return $result;
    }
    public function getOne($id, $documento){
        $sql = "SELECT * FROM users WHERE id='$id' AND documento='$documento';";
        $query=$this->db->query($sql);
        $result = $query->getResult();

        return $result;
    }

    public function paginates($limite){
        $sql = "SELECT * FROM users LIMIT $limite;";
        $query=$this->db->query($sql);
        $result = $query->getResult();
        return $result;

    }
    public function post($poster){
        $sql = "INSERT INTO users (name, email) VALUES ('{$poster['name']}', '{$poster['email']}');";
       
        try{
            $query=$this->db->query($sql); 
        }catch(Exception $error){
            echo $error."error acà";
        }
      
     
      //  
    }
    public function updates($id,$objeto){
        $sql = "UPDATE users SET name='{$objeto['name']}', email='{$objeto['email']}' WHERE id='$id';";
        $query=$this->db->query($sql);
        //$result = $query->getResult();

       //return $result;
    }
    public function deleteOne($id){
        $sql = "DELETE FROM users where id='$id';";
        $query=$this->db->query($sql);
        //$result = $query->getResult();

       // return $result;
    }
}