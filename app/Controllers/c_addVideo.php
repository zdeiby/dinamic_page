<?php 

namespace App\Controllers;
use App\Models\m_multimedia;
use App\Models\M_menu;


class c_addVideo extends BaseController{
    protected $helpers = ['url'];

    public function __construct()
    {    $this->session = \Config\Services::session();
        helper('url');
        $this->uri = service('uri');
    }

    public function aggVideos(){
        $titulo = $this->request->getVar('titulo');
        $url = $this->request->getVar('url');
        
        $datos = [
            'name' => $titulo,
            'url' => $url,
            'slug' => str_replace(' ', '-', $titulo),
        ];
        
        
        //var_dump($datos);
        $model = new m_multimedia();
        if($datos['name'] !=''){
            $model->insert($datos); 
        }
     //  var_dump($datos);

     $modelNav=new M_menu();
     $send=$modelNav->findAll();
     $datosNav=['datosNav'=>$this->session->get(),
                         "nav"=>$send ];

        return view('estructura/nav',$datosNav).view('agg_videos',$datos).view('estructura/footer');
}
    }
    