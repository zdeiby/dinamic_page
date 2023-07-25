<?php

namespace App\Controllers;
use App\Models\userModel;
use App\Models\M_textos;
use App\Models\M_menu;
use App\Models\M_inicio;
use App\Models\M_footer;
use CodeIgniter\Database\Config;
use CodeIgniter\Database\Query;

class Home extends BaseController
{   
    protected $session;
    public $modelHome;
    public $form;
    protected $helpers = ['url'];

    public function __construct()
    {    $this->session = \Config\Services::session();
        helper('url');
        $this->uri = service('uri');
    }

    public function index()
    {   

      $db = Config::connect();
      $builder = $db->table('menu A');
      // Hacer la unión y seleccionar las columnas requeridas
      $builder->join(  'submenu B', 'A.id = B.created_by', 'right');
      $builder->select('A.id, B.id_sub, A.nombre, B.submenu, B.slug , B.opcion, B.created_by');
      
      $results = $builder->get()->getResult();

      $dbTexto = Config::connect();
      $builderText = $db->table('submenu A');
      // Hacer la unión y seleccionar las columnas requeridas
      $builderText->join(  'textos B', 'A.id_sub = B.text_by', 'right');
      $builderText->select('B.titulo, B.texto, B.url, A.submenu, A.slug, B.id_textos,A.id_sub, A.opcion,  A.created_by');

      $resultsText = $builderText->get()->getResult(); 

     
        
      $segmentos = $this->uri->getSegments();
      $modelNav=new M_menu();
      $send=$modelNav->findAll();
      $datos=['datosNav'=>$this->session->get(),
                          "nav"=>$results,
                         "menu"=> $send,
                         "nav2"=>$resultsText];
   
      $inicio=new M_inicio();
      $inicioAll=$inicio->findAll();
      $datosView=[
                  "tof"=>"true",
                  "inicio"=>$inicioAll,
                 ];


      $footer=new M_footer();
      $footerdata['datosfooter']=$footer->findAll();

      return view('estructura/nav',$datos).view('welcome_message',$datosView). view('estructura/footer',$footerdata);
    }
    public function fc_textos(){
      $titulo = $this->request->getVar('titulo');
      $texto = $this->request->getVar('texto');
      $data=['id'=>2,
            'titulo'=>$titulo,
            'texto'=>$texto];
      $model=new M_inicio();
      $model->save($data);
      echo $titulo.$texto;
    }
}