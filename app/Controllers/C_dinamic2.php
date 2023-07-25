<?php
namespace App\Controllers;
use App\Models\userModel;
use App\Models\M_textos;
use App\Models\M_menu;
use App\Models\m_noticias;
use App\Models\M_footer;
use CodeIgniter\Database\Config;
use CodeIgniter\Database\Query;

class C_dinamic2 extends BaseController
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
        $builder->select('A.id, B.id_sub, A.nombre, B.submenu, B.slug, B.opcion, B.created_by');
        
        $results = $builder->get()->getResult(); 


        
        $dbTexto = Config::connect();
        $builderText = $db->table('submenu A');
        // Hacer la unión y seleccionar las columnas requeridas
        $builderText->join(  'textos B', 'A.id_sub = B.text_by', 'right');
        $builderText->select('B.titulo, B.texto, B.url, A.submenu, A.slug, B.id_textos,A.id_sub, A.opcion,  A.created_by');
        
        $resultsText = $builderText->get()->getResult(); 

        $modelNav=new M_menu();
        $send=$modelNav->findAll();
        $titulo = $this->request->getVar('titulo');
        $texto = $this->request->getVar('texto');
        $url = $this->request->getVar('url');
        $id=$this->request->getVar('id');

        $enviarDatos=new M_textos;
        
        $datosUpdate = [
            'titulo' => $titulo,
            'texto' => $texto,
            'url' => $url,
        ];
        if (isset($id)) {
            $enviarDatos->update($id,$datosUpdate); 
            header("Location: " . $_SERVER['PHP_SELF']);
            exit;
        }
    

        $datosView=[
            "tof"=>"true",
            "home"=> $resultsText
           ];

         $segmentos = $this->uri->getSegments();
          $url=$segmentos[1];

        $datos=['datosNav'=>$this->session->get(),
                                  "nav"=>$results,
                                 "menu"=> $send,
                                 "url"=>$url,
                                 "nav2"=>$resultsText];


        $footer=new M_footer();
        $footerdata['datosfooter']=$footer->findAll();   
        return view('estructura/nav',$datos).view('dinamic2',$datosView).view('estructura/footer',$footerdata);
    }
}

   // SELECT B.titulo, B.texto, B.url, A.submenu FROM submenu A RIGHT JOIN textos B ON A.id_sub=B.text_by;