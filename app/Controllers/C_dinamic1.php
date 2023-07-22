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
        $builder->select('A.id, B.id_sub, A.nombre, B.submenu, B.slug , B.opcion, B.created_by');
        
        $results = $builder->get()->getResult();

        $dbTexto = Config::connect();
        $builderText = $db->table('submenu A');
        // Hacer la unión y seleccionar las columnas requeridas
        $builderText->join(  'textos B', 'A.id_sub = B.text_by', 'right');
        $builderText->select('B.titulo, B.texto, B.url, A.submenu, A.slug, B.id_textos');

        $resultsText = $builderText->get()->getResult(); 

        $modelNav=new M_menu();
        $send=$modelNav->findAll();
      
        $segmentos = $this->uri->getSegments();
        $url=$segmentos[1];
        $datos=['datosNav'=>$this->session->get(),
                                  "nav"=>$results,
                                 "menu"=> $send,
                                 "url"=>$url
                               ];

        $model=new M_textos();
        $home=$model->findAll();
        $titulo = $this->request->getVar('titulo');
        $texto = $this->request->getVar('texto');
        $url = $this->request->getVar('url');
        $id=$this->request->getVar('id');
        
        $datosUpdate = [
            'titulo' => $titulo,
            'texto' => $texto,
            'url' => $url,
        ];
        if (isset($id)) {
            $model->update($id,$datosUpdate); 
            header("Location: " . $_SERVER['PHP_SELF']);
            exit;
        }


        $datosView=[
                    "tof"=>"true",
                    "home"=> $resultsText
                   ];
        return view('estructura/nav',$datos).view('dinamic1',$datosView).view('estructura/footer');
    }

}
