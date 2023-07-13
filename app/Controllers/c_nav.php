<?php 

namespace App\Controllers;
use App\Models\M_menu;
use App\Models\M_submenu;

class c_nav extends BaseController{
    protected $helpers = ['url'];
    protected $session;

    public function __construct()
    {   $this->session = \Config\Services::session();
        helper(['url','form']);
        $this->uri = service('uri');
       
    }

    public function nav(){
        $segmentos = $this->uri->getSegments();
        $data['url']=$segmentos[0]; 
       // $datos=$this->session->get();
        return view('estructura/nav');
}
    public function navE(){
        $menu= $this->request->getVar('menu');
        $modelNav=new M_menu();
        $submenu=new M_submenu();
        if($menu != ''){
            $ultimoInsertado=$modelNav->insert(['nombre'=>$menu]);
        $submenu->insert(['submenu' => $menu, 'created_by' => $ultimoInsertado, 'slug' => $menu]);  
        };
      
        
        // Insertar en la tabla M_submenu
      //  
  
     echo $ultimoInsertado;
    }

    public function destroySession(){
        $confirm= $this->request->getVar('session');
        $this->session->destroy();
    }
    }
    