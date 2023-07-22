<?php

namespace App\Controllers;
use App\Models\userModel;
use App\Models\M_textos;
use App\Models\M_menu;
use App\Models\M_inicio;
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

        // Cargar la configuración de la base de datos
        $db = Config::connect();

        // Crear una nueva instancia de la clase QueryBuilder
        $builder = $db->table('menu A');
        
        // Hacer la unión y seleccionar las columnas requeridas
        $builder->join(  'submenu B', 'A.id = B.created_by', 'right');
        $builder->select('A.id, B.id_sub, A.nombre, B.submenu, B.slug,B.opcion, B.created_by');

        // Ejecutar la consulta
        $results = $builder->get()->getResult();

     
        
      $segmentos = $this->uri->getSegments();
      $modelNav=new M_menu();
      $send=$modelNav->findAll();
      $datos=['datosNav'=>$this->session->get(),
                          "nav"=>$results,
                         "menu"=> $send];
   
      $inicio=new M_inicio();
      $inicioAll=$inicio->findAll();
      $datosView=[
                  "tof"=>"true",
                  "inicio"=>$inicioAll,
                 ];


    
      return view('estructura/nav',$datos).view('welcome_message',$datosView). view('estructura/footer');
    }
    public function fc_textos(){
      $titulo = $this->request->getVar('titulo');
      $texto = $this->request->getVar('texto');
      $data=['id'=>1,
            'titulo'=>$titulo,
            'texto'=>$texto];
      $model=new M_inicio();
      $model->save($data);
      echo $titulo.$texto;
    }
}