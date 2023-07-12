<?php 

namespace App\Controllers;
use App\Models\M_usuarios;


class c_loginadm extends BaseController{
    protected $helpers = ['url'];
    protected $session;
    public function __construct()
    {
        $this->session = \Config\Services::session();
        helper('url');
        $this->uri = service('uri');
    }

    public function login(){
        $segmentos = $this->uri->getSegments();
        $data['url']=$segmentos[0];
       // print_r($this->session);
         return view('loginadmin');
}
    public function info(){
         $model=new M_usuarios();
        $data= $model->findAll();
        $documento=$this->request->getVar('documento');
        $contrasena=$this->request->getVar('contrasena');
      //  echo $documento . "input";
        if($documento != '' && $contrasena !=''){
            foreach ($data as $datos ) {
                if($datos['documento'] == $documento){
                    if($datos['contrasena'] ==$contrasena){
                        $this->session->set($datos);
                        echo "success";
                    }
                } 
            }
        }
    }
    }
    

    /*     if($datos['documento']==$documento && $datos['contrasena'] ==$contrasena){
                return "true";
               }else{
               return "falso";
               } */