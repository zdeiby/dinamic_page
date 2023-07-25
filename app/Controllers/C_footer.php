<?php 

namespace App\Controllers;
use App\Models\M_menu;
use App\Models\M_submenu;
use App\Models\M_textos;
use App\Models\M_footer;

class C_footer extends BaseController{
    protected $helpers = ['url'];
    protected $session;

    public function __construct()
    {   $this->session = \Config\Services::session();
        helper(['url','form']);
        $this->uri = service('uri');
       
    }

    public function footer(){
        $segmentos = $this->uri->getSegments();
        $data['url']=$segmentos[0]; 
       // $datos=$this->session->get();
        return view('estructura/footer');
}
    public function eliminarmodulo(){
        $val1 = $this->request->getVar('val1');
        $val2 = $this->request->getVar('val2');
        $val3 = $this->request->getVar('val3');
        
        $datosfooter = [
            'val1' => $val1,
            'val2' => $val2,
            'val3' => $val3
        ];
        
        $footer = new M_footer();
        $footer->update(1, $datosfooter);
      
    }
    public function agregarm1(){
        $val1 = $this->request->getVar('m1titulo');
        $val2 = $this->request->getVar('m1texto1');
        $val3 = $this->request->getVar('m1texto2');
        
        $datosfooter = [
            'val1' => $val1,
            'val2' => $val2,
            'val3' => $val3
        ];
        
        $footer = new M_footer();
        $footer->update(2, $datosfooter);
      
    }
    public function agregarm2(){
        $val1 = $this->request->getVar('m2titulo');
        $val2 = $this->request->getVar('m2texto1');
        $val3 = $this->request->getVar('m2texto2');
        
        $datosfooter = [
            'val1' => $val1,
            'val2' => $val2,
            'val3' => $val3
        ];
        
        $footer = new M_footer();
        $footer->update(3, $datosfooter);
      
    }
    public function agregarm3(){
        $val1 = $this->request->getVar('m3titulo');
        $val2 = $this->request->getVar('m3texto1');
        $val3 = $this->request->getVar('m3texto2');
        
        $datosfooter = [
            'val1' => $val1,
            'val2' => $val2,
            'val3' => $val3
        ];
        
        $footer = new M_footer();
        $footer->update(4, $datosfooter);
      
    }

    
    }
   


   // SELECT B.titulo, B.texto, B.url, A.submenu FROM submenu A RIGHT JOIN textos B ON A.id_sub=B.text_by;