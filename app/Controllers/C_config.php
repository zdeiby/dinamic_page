<?php 

namespace App\Controllers;
use App\Models\M_menu;
use App\Models\M_footer;
use CodeIgniter\Database\Config;
use CodeIgniter\Database\Query;


class C_config extends BaseController{
    protected $helpers = ['url'];

    public function __construct()
    {    $this->session = \Config\Services::session();
        helper('url');
        $this->uri = service('uri');
    }

    public function editarNav(){
        
        $db = Config::connect();
        $builder = $db->table('menu A');
        // Hacer la unión y seleccionar las columnas requeridas
        $builder->join(  'submenu B', 'A.id = B.created_by', 'right');
        $builder->select('A.id, B.id_sub, A.nombre, B.submenu, B.slug, B.opcion');
        
        $results = $builder->get()->getResult(); 

        $segmentos = $this->uri->getSegments();
        $modelNav=new M_menu();
        $send=$modelNav->findAll();
        
         $segmentos = $this->uri->getSegments();
          $url=$segmentos[0];

        $datosNav=['datosNav'=>$this->session->get(),
                                  "nav"=>$results,
                                 "menu"=> $send,
                                 "url"=>$url];
                                 
        $footer=new M_footer();
        $footerdata['datosfooter']=$footer->findAll();

        return view('estructura/nav',$datosNav).view('config').view('estructura/footer',$footerdata);
}
    }
    