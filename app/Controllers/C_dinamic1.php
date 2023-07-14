<?php
namespace App\Controllers;
use App\Models\userModel;
use App\Models\M_textos;
use App\Models\M_menu;
use CodeIgniter\Database\Config;
use CodeIgniter\Database\Query;

class C_dinamic1 extends BaseController
{
    public function __construct()
    {    $this->session = \Config\Services::session();
        helper('url');
        $this->uri = service('uri');
    }

    public function show($slug)
    {    
        $db = Config::connect();
        $builder = $db->table('menu A');
        // Hacer la unión y seleccionar las columnas requeridas
        $builder->join(  'submenu B', 'A.id = B.created_by', 'right');
        $builder->select('A.id, B.id_sub, A.nombre, B.submenu, B.slug , B.opcion');
        
        $results = $builder->get()->getResult();
        $modelNav=new M_menu();
        $send=$modelNav->findAll();
        $datos=['datosNav'=>$this->session->get(),
                                  "nav"=>$results,
                                 "menu"=> $send];
        echo "hola";
        $model=new M_textos();
        $home=$model->findAll();
        $datosView=[
                    "tof"=>"true",
                    "home"=>$home
                   ];
        return view('estructura/nav',$datos).view('dinamic1',$datosView).view('estructura/footer');
    }
    public function fc_textos(){
        $titulo = $this->request->getVar('titulo');
        $texto = $this->request->getVar('texto');
        $data=['id'=>1,
              'titulo'=>$titulo,
              'texto'=>$texto];
        $model=new M_textos();
        $model->save($data);
        echo $titulo.$texto;
      }
}
